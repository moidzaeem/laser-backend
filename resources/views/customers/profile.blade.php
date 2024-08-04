@extends('layouts.dashboard')

@section('content')
    <!-- Row starts -->
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="app-body">
        <h3>Customer File: {{ $customer->last_name }} + {{ $customer->first_name }} </h3>
        <p style="color:#706D74">Display of customer file, data and follow-up</p>
        <div class="card mb-3">
            <div class="col-sm-12 col-12 d-flex">
                <div class="col-sm-3 col-12">
                    <div class="mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="#" class="d-flex align-items-center flex-column">
                                    <img src="{{ asset('assets/images/user1.png') }}" alt="Hospitals Admin Template"
                                        class="img-7x rounded-circle mt-5">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3 col-12 mt-5">
                    <div class="d-flex">
                        <img src="{{ asset('assets/icons/id.png') }}" alt=""
                            style="width: 50px;height:auto ;padding-top: 10px;">
                        <div style="    margin-left: 10px;">
                            <p class="mt-2"><strong>ID Client</strong> <br> {{ $customer->id }} </p>
                        </div>

                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('assets/icons/mail.png') }}" alt=""
                            style="width: 50px;height:auto ;padding-top: 10px;">
                        <div style="margin-left: 10px;">
                            <p class="mt-2"><strong>Mail Address</strong> <br> {{ $customer->email }} </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-12 mt-5">
                    <div class="d-flex">
                        <img src="{{ asset('assets/icons/location.png') }}" alt=""
                            style="width: 50px;height:auto ;padding-top: 10px;">
                        <div style="margin-left: 10px;">
                            <p class="mt-2"><strong>Default Center</strong> <br> id clint </p>
                        </div>

                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('assets/images/award/phone.png') }}" alt=""
                            style="width: 50px;height:auto ;padding-top: 10px;">
                        <div style="margin-left: 10px;">
                            <p class="mt-2"><strong>Phone</strong> <br> {{$customer->phone_no ?? 'N/A'}} </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-12 mt-5">
                    <div class="d-flex">
                        <img src="{{ asset('assets/icons/calander.png') }}" alt=""
                            style="width: 50px;height:auto ;padding-top: 10px;">
                        <div style="margin-left: 10px;">
                            <p class="mt-2"><strong>Date of Birth</strong> <br> {{$customer->dob}} </p>
                        </div>

                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('assets/images/award/phone.png') }}" alt=""
                            style="width: 50px;height:auto ;padding-top: 10px;">
                        <div style="margin-left: 10px;">
                            <p class="mt-2"><strong>Gender</strong> <br> {{$customer->gender}} </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Row starts -->
        <div class="row gx-3">
            <div class="col-xxl-6 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Booked Services</h5>
                    </div>
                    <div class="card-body">
                        <!-- Row start -->
                        @foreach ($customer->services as $service)
                        <div class="row g-3">
                            <div class="col-sm-6 col-12">
                                <div class="border rounded-2 d-flex align-items-center flex-row p-2">
                                    <div class="me-2">
                                        <img src="{{asset($service->logo)}}" alt="">
                                    </div>
                                    <div class="m-0">

                                        <small>{{$service->name}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Row ends -->

                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Working notes / History</h5>
                    </div>
                    <div class="card-body">

                        <!-- Activity starts -->
                        <div class="scroll350">
                            <div class="activity-feed">
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Janie Mcdonald</a> - sent a new
                                        prescription.
                                    </div>
                                    <div class="mb-1">Medecine Name - <a href="#"
                                            class="text-danger">Amocvmillin</a></div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Hector Banks</a> - uploaded a report.
                                    </div>
                                    <div class="mb-1">Report Name - <a href="#"
                                            class="text-danger">Lisymorpril</a></div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Deena Cooley</a> - sent medecine
                                        details.
                                    </div>
                                    <div class="mb-1">Medecine Name - <a href="#"
                                            class="text-danger">Predeymsone</a></div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Mitchel Alvarez</a> - added import
                                        files.
                                    </div>
                                    <div class="mb-1">File Name - <a href="#" class="text-danger">Naverreone</a>
                                    </div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Owen Scott</a> - reviewed your file.
                                    </div>
                                    <div class="mb-1">File Name - <a href="#" class="text-danger">Gabateyntin</a>
                                    </div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                            </div>
                        </div>
                        <!-- Activity ends -->

                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-sm-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Center appointments</h5>
                    </div>
                    <div class="card-body">

                        <!-- Activity starts -->
                        <div class="scroll350">
                            <div class="activity-feed">
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Janie Mcdonald</a> - sent a new
                                        prescription.
                                    </div>
                                    <div class="mb-1">Medecine Name - <a href="#"
                                            class="text-danger">Amocvmillin</a></div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Hector Banks</a> - uploaded a report.
                                    </div>
                                    <div class="mb-1">Report Name - <a href="#"
                                            class="text-danger">Lisymorpril</a></div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Deena Cooley</a> - sent medecine
                                        details.
                                    </div>
                                    <div class="mb-1">Medecine Name - <a href="#"
                                            class="text-danger">Predeymsone</a></div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Mitchel Alvarez</a> - added import
                                        files.
                                    </div>
                                    <div class="mb-1">File Name - <a href="#" class="text-danger">Naverreone</a>
                                    </div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                                <div class="feed-item">
                                    <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                        data-bs-title="Today 05:32:35">An
                                        Hour Ago</span>
                                    <div class="mb-1">
                                        <a href="#" class="text-primary">Dr. Owen Scott</a> - reviewed your file.
                                    </div>
                                    <div class="mb-1">File Name - <a href="#" class="text-danger">Gabateyntin</a>
                                    </div>
                                    <a href="#!" class="text-dark">Payment Link <i
                                            class="ri-arrow-right-up-line"></i> </a>
                                </div>
                            </div>
                        </div>
                        <!-- Activity ends -->

                    </div>
                </div>
            </div>

        </div>
        <!-- Row ends -->
        <div class="row gx-3 mt-5">
            <div class="col-xl-3 col-sm-6 col-12">
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
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
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
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
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
            </div>


        </div>
    </div>
@endsection
