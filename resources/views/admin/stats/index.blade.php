@extends('layouts.dashboard')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="row gx-3">
        <div class="col-xxl-12 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title"></h5>
                </div>
                <div class="card-body">
                    <!-- Row start -->
                    <div class="row g-3">
                        <div class="col-xl-5 col-lg-12">
                            <div class="mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">Statistics</h5>
                                    <p>Below you will find the center's statistics for the selected center:</p>
                                    <h4 class="text-left text-muted">{{$centers->center_name}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                        @if(Auth::user()->user_type ==0)

                            <div class="m-0">
                                <label class="form-label" for="abc4">Choose center</label>
                                <select class="form-select" id="abc4" aria-label="Default select example"
                                    onchange="redirectToCenter()">
                                    <option value="" selected disabled>--Please--select</option>
                                    @foreach ($allCenters as $center)
                                        <option value="{{ $center->id }}">{{ $center->center_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        </div>
                        <div class="col-xl-3 col-lg-12">
                            {{-- <div class="m-0">
                                <label class="form-label" for="abc4">Period</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="ri-calendar-2-line"></i>
                                    </span>
                                    <input type="text" id="abc4" class="form-control datepicker-week-numbers">
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="border rounded-2 d-flex align-items-center flex-row p-4 bag">

                                <div class="m-0">
                                    <small>Year Selected</small>
                                    <div class="d-flex align-items-center d-flex">
                                        <p class="m-0 fw-bold">Over all
                                            <span>2024</span>
                                        </p>
                                        <div>
                                            <img src="assets/images/award/calander.png" alt="" class="box">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="border rounded-2 d-flex align-items-center flex-row p-4 ">

                                <div class="m-0">
                                    <small>Monthly sales</small>
                                    <div class="d-flex align-items-center d-flex">
                                        <h4 class="m-0 fw-bold">{{ $statsData['totalPrice'] }} €</h4>
                                        <div>
                                            <img src="assets/images/award/wfi.png" alt="" class="box">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="border rounded-2 d-flex align-items-center flex-row p-4 ">

                                <div class="m-0">
                                    <small>Appointments</small>
                                    <div class="d-flex align-items-center d-flex">
                                        <h4 class="m-0 fw-bold">{{ $statsData['appointmentCounts'] }}</h4>
                                        <div>
                                            <img src="assets/images/award/wfi.png" alt="" class="box">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="border rounded-2 d-flex align-items-center flex-row p-4 ">

                                <div class="m-0">
                                    <small>Customers</small>
                                    <div class="d-flex align-items-center d-flex">
                                        <h4 class="m-0 fw-bold">{{ $statsData['customersCount'] }}</h4>
                                        <div>
                                            <img src="assets/images/award/wfi.png" alt="" class="box">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-2 col-12">
                            <div class="border rounded-2 d-flex align-items-center flex-row p-4 ">
                                <div class="m-0">
                                    <small>Worked hours</small>
                                    <div class="d-flex align-items-center d-flex">
                                        <h4 class="m-0 fw-bold">588</h4>
                                        <div>
                                            <img src="assets/images/award/wfi.png" alt="" class="box">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-5 col-lg-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">Revenues by service</h5>
                                    {{-- <p>From 1-31 March, 2022</p> --}}
                                </div>
                                <div class="card-body">
                                    <div class="chart-height">
                                        <div id="donut" class="auto-align-graph"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">Revenues by Centers</h5>
                                    {{-- <p>From 1-31 March, 2022</p> --}}
                                </div>
                                <div class="card-body">
                                    <div class="chart-height">
                                        <div id="pie" class="auto-align-graph"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-2 col-lg-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <p class="card-title">Latest billing</p>
                                </div>
                                <div class="card-body">
                                    <div class="chart-height">

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function redirectToCenter() {
            // Get the select element
            var selectElement = document.getElementById('abc4');
            // Get the selected value
            var centerId = selectElement.value;

            // Check if a valid centerId is selected
            if (centerId) {
                // Redirect to the home page with center_id as a query parameter
                window.location.href = '/all-stats?center_id=' + encodeURIComponent(centerId);
            }
        }
    </script>
@endsection
