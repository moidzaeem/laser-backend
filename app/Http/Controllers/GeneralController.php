<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Customers;
use App\Models\Practicioners;
use App\Models\PractictionerCenter;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function allStats(Request $request)
    {
        $user = auth()->user();
        $centerId = $request->input('center_id');

        if ($user->user_type === 1) {
            $practitioner = Practicioners::where('user_id', $user->id)->first();
            if ($practitioner) {
                $pracCenter = PractictionerCenter::whereRaw('FIND_IN_SET(?, practicioners_ids)', [$practitioner->id])->first();
                if ($pracCenter) {
                    $centerId = $pracCenter->center_id;
                }
            }
        }

        $allCenters = Center::all();
        if ($centerId) {
            $centers = Center::with(['centerDetails', 'centerServices', 'customersAppointments', 'practictionerCenter'])
                ->where('id', $centerId)
                ->first();
        } else {
            $centers = Center::with(['centerDetails', 'centerServices', 'customersAppointments', 'practictionerCenter'])->first();
        }

        // Initialize the total price
        $totalPrice = 0;

        // Iterate over each customer appointment
        foreach ($centers->customersAppointments as $appointment) {
            // Sum the prices of the associated services
            foreach ($appointment->services as $key => $value) {
                $totalPrice += $value->price ?? 0;
            }
        }





        $statsData = [];
        $statsData['appointmentCounts'] = count($centers->customersAppointments) ?? 0;
        $statsData['customersCount'] = Customers::where('center_id', $centers->id)
            ->distinct('email')
            ->count('email');

        $statsData['totalPrice']=$totalPrice;
        return view('admin.stats.index', compact('allCenters', 'centers', 'statsData'));
    }
}
