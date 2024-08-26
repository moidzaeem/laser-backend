@extends('layouts.dashboard')

@section('content')
    <!-- Row starts -->
    <div class="row gx-3 d-flex bg-2">


        <div class="col-xl-7">
            <div class="card-body">
                <div class="py-4 px-3 ">
                    <h2>{{__('Hello')}} {{ auth()->user()->name }},</h2>
                    <h2>{{__('Welcome to the CRM')}}</h2>
                    <h5>{{__('Your schedule today.')}}</h5>
                    <p>{{__('The dashboard contains an overview of your center and the selected period.')}}</p>

                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="mb-3">
                <div class="mt-5">

                </div>
            </div>
            <div class="mb-0">
                <div class="mt-5 d-flex p-4">
                    @if(Auth::user()->user_type == 0)
                    <select class="form-select" id="abc4" aria-label="Default select example" onchange="redirectToCenter()">
                        <option disabled="">Select Location</option>
                        @foreach ($allCenters as $center)
                            <option value="{{$center->id}}">{{$center->center_name}}</option>
                        @endforeach
                    </select>
                        
                    @endif
                    {{-- <select class="form-select ml-5" id="abc4" aria-label="Default select example"
                        style="margin-left: 5px;">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> --}}
                </div>
            </div>
        </div>


    </div>

    <!-- Row ends -->

    <!-- Row starts -->
    <div class="row gx-3 mt-5">
        <div class="col-xl-6 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <img src="{{asset('assets/icons/calander.png')}}" alt="" style="width: 42px">
                </div>
                <div class="card-body">
                    <p>{{__('Appointments of the Day')}}</p>

                    <h4>
                       {{$appointments['completed_count']}} / {{$appointments['total_count']}}</h4>

                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <img src="{{asset('assets/icons/calander.png')}}" alt="" style="width: 42px">
                </div>
                <div class="card-body">
                    <p>{{__('Practitioners available')}}</p>

                    <h4>
                        {{$pracCount}}</h4>

                </div>
            </div>
        </div>

        {{-- <div class="col-xl-3 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <img src="{{asset('assets/icons/calander.png')}}" alt="" style="width: 42px">
                </div>
                <div class="card-body">
                    <p>Appointment on hold</p>

                    <h4>
                        82 211</h4>

                </div>
            </div>
        </div> --}}


    </div>
    <!-- Row ends -->


    <!-- Row ends -->

    <!-- Row starts -->
    <div class="row gx-3">


        <div class="col-xxl-6 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">{{__('Services available at my center')}}</h5>
                </div>
                <div class="card-body">

                    <!-- Row start -->
                    @if(isset($servicesForCenters->services))
                        @foreach ($servicesForCenters->services as $service)
                            
                            <div class="row g-3">
                                <div class="col-sm-6 col-12">
                                    <div class="border rounded-2 d-flex align-items-center flex-row p-2">
                                        <div class="me-2">
                                            <img src="{{asset($service['logo'])}}" alt="">
                                        </div>
                                        <div class="m-0">

                                            <small>{{$service['name']}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <!-- Row ends -->

                </div>
            </div>
            <div class="card mb-3 d-none">
                <div class="card-header">
                    <h5 class="card-title">Patient Reviews</h5>
                </div>
                <div class="card-body">

                    <!-- Reviews starts -->
                    <div class="scroll300">
                        <div class="d-grid gap-4">
                            <div class="d-flex">
                                <img src="assets/images/patient1.png" class="img-4x rounded-2" alt="Medical Admin Template">
                                <div class="mt-4 ms-3">
                                    <h6>Wendi Combs</h6>

                                </div>
                            </div>
                            <div class="d-flex">
                                <img src="assets/images/patient2.png" class="img-4x rounded-2" alt="Medical Admin Template">
                                <div class="mt-4 ms-3">
                                    <h6>Nick Morrow</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Reviews ends -->

                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-sm-6 d-none">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Center appointments</h5>
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
                                <div class="mb-1">Medecine Name - <a href="#" class="text-danger">Amocvmillin</a>
                                </div>
                                <a href="#!" class="text-dark">Payment Link <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                                    Hour Ago</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Hector Banks</a> - uploaded a report.
                                </div>
                                <div class="mb-1">Report Name - <a href="#" class="text-danger">Lisymorpril</a>
                                </div>
                                <a href="#!" class="text-dark">Payment Link <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                                    Hour Ago</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Deena Cooley</a> - sent medecine details.
                                </div>
                                <div class="mb-1">Medecine Name - <a href="#" class="text-danger">Predeymsone</a>
                                </div>
                                <a href="#!" class="text-dark">Payment Link <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                                    Hour Ago</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Mitchel Alvarez</a> - added import files.
                                </div>
                                <div class="mb-1">File Name - <a href="#" class="text-danger">Naverreone</a>
                                </div>
                                <a href="#!" class="text-dark">Payment Link <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                                    Hour Ago</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Owen Scott</a> - reviewed your file.
                                </div>
                                <div class="mb-1">File Name - <a href="#" class="text-danger">Gabateyntin</a>
                                </div>
                                <a href="#!" class="text-dark">Payment Link <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Activity ends -->

                </div>
            </div>
        </div>

    </div>
    <!-- Row ends -->
@endsection

<script>

document.addEventListener('DOMContentLoaded', function() {
    // Function to get query parameters from the URL
    function getQueryParam(param) {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    // Get the center_id from URL parameters
    var centerId = getQueryParam('center_id');

    // If a center_id exists in the URL, set it as the selected value in the dropdown
    if (centerId) {
        var selectElement = document.getElementById('abc4');
        selectElement.value = centerId;
    }
});


    function redirectToCenter() {
        // Get the select element
        var selectElement = document.getElementById('abc4');
        // Get the selected value
        var centerId = selectElement.value;
        
        // Check if a valid centerId is selected
        if (centerId) {
            // Redirect to the home page with center_id as a query parameter
            window.location.href = '/home?center_id=' + encodeURIComponent(centerId);
        }
    }
    </script>