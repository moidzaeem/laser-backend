@extends('layouts.dashboard')

@section('content')
    <!-- Row starts -->
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                {{ Session::get('success') }}
        </div>
    @endif
    <div class="row gx-3">
        <div class="col-xl-5 col-lg-12">
            <div class="mb-3">
                <div class="card-header">
                    <h5 class="card-title">LaserAddict center management</h5>
                    <p>Below is a list of LaserAddict centers in the CRM..</p>
                </div>
                <a data-bs-toggle="modal" data-bs-target="#addCenterForm" class="btn btn-primary ms-auto"
                    style="background: white;
            color: #21A282;width: 190px;
        ">+ Add a center</a>
                {{-- <a href="book-appointment.html" class="btn btn-primary ms-auto"
                    style="background: white;
            color: #21A282;width: 190px;
        ">Edit / Delete</a> --}}
            </div>
        </div>

        <div class="col-sm-8 col-12"></div>
        <div class="col-sm-4 col-12" style="padding-bottom:20px;">
            <div class="search-container d-lg-block d-none mx-3">
                <input type="text" class="form-control" id="searchId" placeholder="Search">
                <i class="ri-search-line"></i>
            </div>
        </div>
        @if (!empty($centers))
            @foreach ($centers as $center)
                <div class="col-sm-3 col-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <img src="{{ asset($center->logo) }}" alt="" style="width: 70px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $center->center_name }} </h5>
                            <p>
                                {{ $center->region }} &nbsp; {{ $center->region_no }}
                            </p>

                            <a href="{{route('center.show', $center->id)}}" class="btn btn-outline-info w-100 ">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>


    <!-- Modal -->
    <div class="modal fade" id="addCenterForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="exampleForm" action="{{ route('center.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="center_name" class="form-label">Center Name</label>
                            <input type="text" class="form-control" id="center_name" name="center_name"
                                placeholder="Enter center name">
                        </div>
                        <div class="mb-3">
                            <label for="region" class="form-label">Region</label>
                            <input type="text" class="form-control" id="region" name="region"
                                placeholder="Enter region">
                        </div>
                        <div class="mb-3">
                            <label for="region_no" class="form-label">Region Number</label>
                            <input type="text" class="form-control" id="region_no" name="region_no"
                                placeholder="Enter region number">
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
