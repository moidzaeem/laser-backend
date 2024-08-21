<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Practicioners;
use App\Models\PractictionerCenter;
use Illuminate\Http\Request;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;
class CustomersController extends Controller
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


        $data = Customers::create([
            'center_id' => $request->center_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'service_id' => $request->service_id,
            'appointment_datetime' => $request->appointment_datetime
        ]);

        try {
            //code...



            Mail::to($data->email)->send(new BookingConfirmation($data));

        } catch (\Throwable $th) {
            //throw $th;
        }

        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => 'Appointment done'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customers $customers)
    {
        //
    }

    public function getCenterCustomers()
    {
        $user = auth()->user();
        if ($user->user_type === 1) {
            $practitioner = Practicioners::where('user_id', $user->id)->first();
            if ($practitioner) {
                $pracCenter = PractictionerCenter::whereRaw('FIND_IN_SET(?, practicioners_ids)', [$practitioner->id])->first();
                if ($pracCenter) {
                    $centerId = $pracCenter->center_id;
                    $customers = Customers::where('center_id', $centerId)->with('services')->get();
                    return view('customers.index', compact('customers'));
                }
            }
        } else {
            $customers = Customers::with('services')->get();
            return view('customers.index', compact('customers'));
        }

    }

    public function getCustomerProfile($id)
    {
        $customer = Customers::with('services')->findOrFail($id);
        // dd($customer);
        return view('customers.profile', compact('customer'));
    }
}
