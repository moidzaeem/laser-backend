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
                    <h5 class="card-title">{{__('LaserAddict Services management')}}</h5>
                    <p>{{__('Below is a list of LaserAddict Services in the CRM')}}.</p>
                </div>
                @if(Auth::user()->user_type === 0)
                <a data-bs-toggle="modal" data-bs-target="#serviceModal" class="btn btn-primary ms-auto"
                    style="background: white;color: #21A282;width: 190px; ">+ {{__('Add a service')}}</a>
                    @endif
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
                                {{-- <img src="{{asset('assets/images/award/newedit.png')}}" alt="" style="width: 28px;margin-right: 25px;"/> --}}

                            </div>

                            <p>
                                {{$service->duration}} {{__('Minutes')}}
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
    <!-- Row ends -->

    <!-- Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Submit Details')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="exampleForm" action="{{ route('service.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="service_name" class="form-label">{{__('Service Name')}}</label>
                            <input type="text" class="form-control" id="service_name" name="service_name"
                                placeholder="Enter service name">
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">{{__('Duration')}}</label>
                            <input type="text" class="form-control" id="duration" name="duration"
                                placeholder="Enter duration">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">{{__('Price')}}</label>
                            <input type="number" class="form-control" id="price" name="price"
                                placeholder="Enter Price">
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">{{__('Logo')}}</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
