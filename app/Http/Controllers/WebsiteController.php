<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Service;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $centers = Center::with('centerServices')->get();
        return view('website.index', compact('centers'));
    }

    public function getSelectedCenterServices($centerId)
    {
        $center = Center::with(['centerDetails', 'centerServices'])->find($centerId);
        $centerServices = null;
        if ($center && $center->centerServices) {
            $centerServicesIds = explode(',', $center->centerServices->service_ids);
            $centerServices = Service::whereIn('id', $centerServicesIds)->get()->toArray();
            return response()->json($centerServices);
        }
    }
}
