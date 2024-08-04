@extends('layouts.dashboard')

@section('content')
    <!-- Row starts -->
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <!-- Row starts -->
    <div class="row gx-3">
        <div class="col-xl-12 col-lg-12">
            <div class="mb-3">
                <div class="card-header">
                    <h5 class="card-title">Services</h5>
                    <p>Here are the services</p>
                </div>
            </div>
        </div>

        @if ($services)
            @foreach ($services as $service)
                <div class="col-sm-3 col-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <img src="{{asset($service->logo)}}" alt="" style="width: 70px">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{$service->name}} </h5>
                                <img src="{{asset('assets/images/award/newedit.png')}}" alt="" style="width: 28px;margin-right: 25px;"/>

                            </div>

                            <p>
                                {{$service->duration}} Minutes
                            </p>
                        </div>
                        <div class="card-body">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                            <h5 class="">{{$service->price}} EUR </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
@endsection
