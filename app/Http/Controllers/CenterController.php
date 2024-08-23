<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Customers;
use App\Models\Practicioners;
use App\Models\Service;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = Center::all();
        return view('admin.center.index', compact('centers'));
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
            'center_name' => 'nullable|string|max:255',
            'region' => 'nullable|string|max:255',
            'region_no' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
        ]);

        $center = new Center();
        $center->center_name = $request->input('center_name');
        $center->region = $request->input('region');
        $center->region_no = $request->input('region_no');

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->extension(); // Generate a unique name
            $logo->move(public_path('uploads'), $logoName); // Move the file to the public/logos directory
            $center->logo = 'uploads/' . $logoName; // Save the relative path
        }

        $center->save();

        return back()->with('success', 'Center is created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $center = Center::with(['centerDetails', 'centerServices', 'customersAppointments', 'practictionerCenter'])->find($id);
        $centerServices = null;
        if ($center && $center->centerServices) {
            $centerServicesIds = explode(',', $center->centerServices->service_ids);
            $centerServices = Service::whereIn('id', $centerServicesIds)->get()->toArray();
        }
        if ($center && $center->practictionerCenter) {
            $pracIds = explode(',', $center->practictionerCenter->practicioners_ids);
            $practictonerCenter = Practicioners::whereIn('id', $pracIds)->get()->toArray();
            $center['practictioners'] = $practictonerCenter;

        }
        $center['services'] = $centerServices;
        $services = Service::where('is_active', 1)->get();
        $practictioners = Practicioners::all();

        // dd($center);

        return view('admin.center.show', compact('center', 'services', 'practictioners'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Center $center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center $center)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Center $center)
    {
        //
    }

    public function apiForGetAllCenters()
    {
        try {
            $centers = Center::all();
            return response()->json([
                'success' => true,
                'data' => $centers
            ]);
        } catch (\Exception $exception) {

        }

    }

    public function getCalanderCenterAppointments(Request $request)
    {
        $appointments = Customers::whereDate('appointment_datetime', '>=', $request->start)->get();
        $testData = [];
        foreach ($appointments as $appointment) {
            // Parse appointment_datetime to a Carbon instance
            $startTime = \Carbon\Carbon::parse($appointment->appointment_datetime);
            
            // Calculate end_time by adding 60 minutes to the start_time
            $endTime = $startTime->copy()->addMinutes(60);
    
            // Format the times as desired (24-hour format)
            $formattedStartTime = $startTime->format('H:i');
            $formattedEndTime = $endTime->format('H:i');

            $service = Service::find($appointment->service_id);
            $serviceLogo = asset($service->logo);
            // Build the event data array
            $testData[] = [
                'title' => '<div class="title">' . $appointment->first_name . ' ' . $appointment->last_name . '</div>' .
                    '<div class="deets"><span class="time">' . $formattedStartTime . ' - ' . $formattedEndTime . '</span>' .
                    '<span class="location"><img width="20" height="20" src='.$serviceLogo.'>' .$service->name . '</span></div>',
                'start' => $startTime->toIso8601String(), // Format start time in ISO 8601 format
                'end' => $endTime->toIso8601String(), // Format end time in ISO 8601 format
                'id' => $appointment->id,
                'color' => $appointment->status === 'created' ? 'blue' : 'completed',
            ];
        }




        return response()->json($testData);
    }
}
