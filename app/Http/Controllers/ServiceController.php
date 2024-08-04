<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\CenterServices;
use App\Models\Practicioners;
use App\Models\PractictionerCenter;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
        ]);

        $service = new Service();
        $service->name = $request->input('service_name');
        $service->duration = $request->input('duration');
        $service->price = $request->input('price');

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->extension(); // Generate a unique name
            $logo->move(public_path('uploads'), $logoName); // Move the file to the public/logos directory
            $service->logo = 'uploads/' . $logoName; // Save the relative path
        }

        $service->save();

        return back()->with('success', 'Service is created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }

    public function getServicesForHospital(Request $request){
       
        $centerId = $request->center_id;
        $center = Center::with(['centerDetails', 'centerServices'])->find($centerId);
        $centerServices = null;
        if ($center && $center->centerServices) {
            $centerServicesIds = explode(',', $center->centerServices->service_ids);
            $centerServices = Service::whereIn('id', $centerServicesIds)->get()->toArray();
            return response()->json([
                'success'=>true,
                'data'=>$centerServices
            ]);
        }

    }

    public function getCenterServices(){
        $user = auth()->user();
        if ($user->user_type === 1) {
            $practitioner = Practicioners::where('user_id', $user->id)->first();

            if ($practitioner) {
                $pracCenter = PractictionerCenter::whereRaw('FIND_IN_SET(?, practicioners_ids)', [$practitioner->id])->first();
                if ($pracCenter) {
                    $centerId = $pracCenter->center_id;
                  $centerServices = CenterServices::where('center_id', $centerId)->first();
                  if($centerServices){
                    $centerServicesIds = explode(',', $centerServices->service_ids);
                    $services = Service::whereIn('id', $centerServicesIds)->get();
                    return view('admin.service.index', compact('services'));

                  }
                }
            }
        }

    }
}
