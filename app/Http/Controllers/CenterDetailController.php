<?php

namespace App\Http\Controllers;

use App\Models\CenterDetail;
use App\Models\CenterServices;
use Illuminate\Http\Request;

class CenterDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Extract attributes except 'services'
        $data = $request->except('services');


        // Determine the attributes to find the record
        $findAttributes = ['center_id' => $data['center_id']];

        // Update or create the record
        CenterDetail::updateOrCreate(
            $findAttributes,
            $data
        );

        if ($request->services) {
            $servicesArray = json_decode($request->services, true);
            $servicesIds = [];
            foreach ($servicesArray as $urlObject) {
                $servicesIds[] = $urlObject['label'];
            }
            CenterServices::updateOrCreate(
                $findAttributes,
                ['service_ids' => implode(',', $servicesIds)]
            );
        }

        return back()->with('success', 'Data updated');
    }

    /**
     * Display the specified resource.
     */
    public function show(CenterDetail $centerDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CenterDetail $centerDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CenterDetail $centerDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CenterDetail $centerDetail)
    {
        //
    }
}
