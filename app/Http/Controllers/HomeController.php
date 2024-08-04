<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Customers;
use App\Models\Practicioners;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $today = Carbon::today(); // Get today's date
        $allCenters = Center::all();
        if ($request->has('center_id')) {
            $centerId = $request->input('center_id');
            $centers = Center::with(['centerDetails', 'centerServices', 'customersAppointments', 'practictionerCenter'])
                ->where('id', $centerId)
                ->first();
        } else {
            $centers = Center::with(['centerDetails', 'centerServices', 'customersAppointments', 'practictionerCenter'])->first();


        }

        $appointmentCounts = Customers::selectRaw('
        COUNT(*) as total_count,
        COUNT(CASE WHEN status = "created" THEN 1 END) as created_count,
        COUNT(CASE WHEN status = "completed" THEN 1 END) as completed_count
    ')
            ->where('center_id', $centers->id)
            ->whereDate('appointment_datetime', $today)
            ->first();

        $centerServices = null;
        if ($centers->centerServices) {
            $centerServicesIds = explode(',', $centers->centerServices->service_ids);
            $centerServices = Service::whereIn('id', $centerServicesIds)->get()->toArray();
        }

        if ($centers && $centers->practictionerCenter) {
            $pracIds = explode(',', $centers->practictionerCenter->practicioners_ids);
        }else{
            $pracIds = [];
        }

        $centers->services = $centerServices;

        return view('home', [
            'servicesForCenters' => $centers,
            'activeServices' => Service::where('is_active', 1)->get(),
            'allCenters' => $allCenters,
            'appointments' => $appointmentCounts,
            'pracCount'=>count($pracIds)
        ]);
    }

}
