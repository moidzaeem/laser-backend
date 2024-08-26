@extends('layouts.dashboard')

@section('content')
    <!-- Row starts -->
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="row gx-3">

        <div class="col-sm-3 col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <img src="assets/images/award/proo.png" alt="" style="width: 42px">
                </div>
                <div class="card-body">
                    <h4>
                        {{ $customers->count() }}</h4>
                    <p>Number of national customers</p>

                </div>
            </div>
        </div>
        {{-- <div class="col-sm-3 col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <img src="assets/images/award/proo.png" alt="" style="width: 42px">
                </div>
                <div class="card-body">
                    <h4>
                        82 211</h4>
                    <p>Number of national customers</p>

                </div>
            </div>
        </div> --}}
        <div class="col-sm-6 col-12">
        </div>
        <div class="card mb-3">
            <div class="col-sm-12 col-12 d-flex">

                <div class="col-sm-4 col-12">

                    <div class="card-header d-flex">
                        <img src="{{ asset('assets/icons/user_customer.png') }}" alt="" class="img-fluid">
                        <h4 style="margin-left: 10px;color:#248CA3">
                            {{ __('Appointments') }}
                            <p style="font-size: 14px">{{ __('Appointment follow-up') }}</p>
                        </h4>
                    </div>


                    <div class="card-body" style="margin-top: -30px;">
                        <p>{{ __('Customers have an average of ### appointments') }}</p>

                    </div>

                </div>
                <div class="col-sm-4 col-12">

                    <div class="card-header d-flex">
                        <img src="assets/images/award/proo.png" alt="" style="width: 42px;height: 35px;">
                        <h4 style="margin-left: 10px;    color: #E47464;">
                            {{ __('Planning') }}
                            <p style="font-size: 14px">{{ __('Appointment follow-up') }}</p>
                        </h4>
                    </div>
                    <div class="card-body" style="margin-top: -30px;">
                        <p>{{ __('Rate of changes to online appointments after they have been booked. On average, 40 out of 300
                                                    customers modify their appointment once it has been scheduled.') }}
                        </p>

                    </div>

                </div>
                <div class="col-sm-4 col-12">

                    <div class="card-header d-flex">
                        <img src="assets/images/award/proo.png" alt="" style="width: 42px;height: 35px;">
                        <h4 style="margin-left: 10px;    color: #E4D764;">
                            Mon centre
                            <p style="font-size: 14px">{{ __('My center and its services') }}</p>
                        </h4>
                    </div>
                    <div class="card-body" style="margin-top: -30px;">
                        <p>{{ __('On average for all customers, STOP Smoking is taken in 12% of cases, followed by Weight Loss in 10% of cases.') }}
                        </p>

                    </div>

                </div>



            </div>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="mb-3">
                <div class="card-header">
                    <h5 class="card-title">{{ __('All customers') }}</h5>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-12 d-none">
            <div class="mb-3">
                <div class="m-0">

                    <select class="form-select" id="abc4" aria-label="Default select example">
                        <option selected="">{{ __('Open this select menu') }}</option>
                        <option value="1">{{ __('One') }}</option>
                        <option value="2">{{ __('Two') }}</option>
                        <option value="3">{{ __('Three') }}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-12">
            <div class="mb-3">

            </div>
        </div>

        <div class="col-xl-1 col-lg-12">
        </div>
        <div class="col-xl-2 col-lg-12">
        </div>
        <div class="col-xl-2 col-lg-12">

        </div>
        <div class="col-xl-2 col-lg-12 d-none">
            <div class="mb-3">
                <div class="card-header d-flex align-items-center justify-content-between">

                    <a href="add-doctors.html" class="btn btn-primary ms-auto" style="width: 184px">+
                        {{ __('Add a customer') }}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">

                    <!--<a href="add-doctors.html" class="btn btn-primary ms-auto">Add Doctor</a>-->
                </div>


                <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-responsive">
                        <table id="basicExample" class="table truncate m-0 align-middle">
                            <thead>
                                <tr>

                                    <th>{{ __('First Name') }}</th>
                                    <th>{{ __('Last name') }}</th>
                                    <th class="text-center">{{ __('Phone') }}</th>
                                    <th class="text-center">{{ __('Mail address') }}</th>
                                    <th class="text-center">{{ __('Booked services') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>
                                            {{ $customer->first_name }}
                                        </td>
                                        <td> {{ $customer->last_name }}</td>
                                        <td class="text-center"> {{ $customer->phone_no }}</td>
                                        <td class="text-center"> {{ $customer->email }}</td>
                                        <td class="text-center">
                                            @foreach ($customer->services as $service)
                                                <img src="{{ $service->logo }}" class="img-shadow img-2x rounded-5 me-1"
                                                    alt="Medical Admin Template">{{ $service->name }}
                                            @endforeach

                                        </td>

                                        <td>
                                            <div class="d-inline-flex gap-1">

                                                <a href="edit-doctors.html" class="">
                                                    <img src="assets/images/award/phone.png" alt=""
                                                        style="width: 37px;padding-top: 10px;">
                                                </a>
                                                {{-- <a href="doctors-profile.html" class="">
                                                    <img src="assets/images/award/edit.png" alt=""
                                                        style="width: 30px;padding-top: 10px;">
                                                </a>
                                                <a href="doctors-profile.html" class="">
                                                    <img src="assets/images/award/profile.png" alt=""
                                                        style="width: 30px;padding-top: 10px;">
                                                </a> --}}
                                                <a href="{{ route('customer.profile', $customer->id) }}" class="">
                                                    <img src="assets/images/award/modify.png" alt=""
                                                        style="width: 37px;padding-top: 10px;">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                    <!-- Table ends -->

                    <!-- Modal Delete Row -->
                    <div class="modal fade" id="delRow" tabindex="-1" aria-labelledby="delRowLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delRowLabel">
                                        {{__('Confirm')}}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{__('Are you sure you want to delete the doctor from list?')}}
                                </div>
                                <div class="modal-footer">
                                    <div class="d-flex justify-content-end gap-2">
                                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">{{__('No')}}</button>
                                        <button class="btn btn-danger" data-bs-dismiss="modal"
                                            aria-label="Close">{{__('Yes')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
