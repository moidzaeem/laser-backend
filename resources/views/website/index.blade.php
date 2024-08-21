<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Assistant</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/style.css') }}">
</head>

<body>

    <div class="header">
        <p> {{__('Make an appointment for a session')}} <span class="icon">👇</span></p>
        @include('partials/language_switcher')
    </div>


    <div class="container mt-5">
        <!-- logo -->
        <div class="logo">
            <img src="{{ asset('icons/logo.svg') }}" alt="LaserAddict Logo" class="img-fluid mb-3" />
        </div>
       
        <div class="text-center">
            <h2>{{__('Make an appointment for a session')}}</h2>
            <h2>{{__('by booking online')}}</h2>
            <p class="text-muted">{{__('Let the wizard guide you')}}</p>
        </div>
        

        <!-- Progress Bar -->
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="steps">
                    <progress id="progress" value=0 max=100></progress>
                    <div class="step-item">
                        <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1
                        </button>
                        <div class="step-title">
                            {{__('Choose a center')}}
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2
                        </button>
                        <div class="step-title">
                            {{__('Choose a service')}}
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3
                        </button>
                        <div class="step-title">
                           {{__('Choose a time slot')}}
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4
                        </button>
                        <div class="step-title">
                            {{__('Enter Customer Information')}}
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                            5
                        </button>
                        <div class="step-title">
                            {{__('Confirmation')}}
                        </div>
                    </div>
                </div>

                <!-- stepper 1 -->

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">

                    <div class="">


                        <div class="text-center mt-5">
                            <h3>{{__('Choosing a LaserAddict center')}}</h3>
                        </div>

                        <div class="input-group location-input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                            <input type="text" class="form-control" placeholder="{{__('Locate me to see nearest')}}">
                            <span class="input-group-text"><i class="bi bi-chevron-down"></i></span>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-container">
                            <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    @foreach ($centers as $center)
                                        <div class="col">
                                            <div class="custom-card" data-center-id="{{ $center->id }}"
                                                id="card-{{ $center->id }}">
                                                <div class="card-body">
                                                    <img src="{{ asset($center->logo) }}"
                                                        alt="{{ $center->center_name }}" class="img-fluid mb-2" />
                                                    <h5 class="card-title">{{ $center->center_name }}</h5>
                                                    <p class="card-text">{{ $center->region }}
                                                        {{ $center->region_no }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="rating mt-5 text-center">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-google"></i>
                                    <i class="bi bi-facebook text-blue"></i>
                                    <span class="ms-2 font-weight-bold bold" style="font-weight: bold;">
                                        {{__('A method approved by over 3,000 customers across France')}}</span>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="button" class="btn btn-light disabled">{{__('Cancel')}}</button>
                                    <button type="button"
                                        class="btn btn-success  btn-lg next-step-button">{{_('Next')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- stepper 2 -->


                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">


                    <div class="card-body">
                        <style>
                            .footer .container {
                                background-color: #2ca080;
                                border-radius: 20px;
                                height: 170px;
                            }

                            .footer .container .row .feature-box {

                                color: white;
                                padding: 10px;
                                text-align: center;
                            }

                            .footer .feature-box i {
                                font-size: 2rem;

                            }
                        </style>

                        <span class="text-center mt-5">
                            <h3>Choose your Laser session </h3>
                        </span>

                        <!-- box-location -->
                        <!-- <div class="location-select">
                                <i class="bi bi-geo-alt-fill location-icon"></i>
                                <span class="location-text">Locate me to see nearest</span>
                                <img src="icons/down-btn.svg" alt="">
                            </div> -->

                        <!-- cards  -->
                        <div class="col">
                            <div class="card card-container">
                                <div class="card-body">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4"
                                        id="services-container">
                                        <!-- Services will be dynamically inserted here -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer">
                            <div class="container mt-5">
                                <div class="row text-center">
                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="feature-box">
                                            <i class="bi bi-people"></i>
                                            <h6>1-year warranty</h6>
                                            <p>Tobacco sessions are guaranteed for one year</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="feature-box">
                                            <i class="bi bi-people"></i>
                                            <h6>A unique method</h6>
                                            <p>The LaserAddict Method is unique in France</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="feature-box">
                                            <i class="bi bi-people"></i>
                                            <h6>Support</h6>
                                            <p>We take care of you by accompanying you</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="feature-box">
                                            <i class="bi bi-people"></i>
                                            <h6>A high success rate</h6>
                                            <p>A customer satisfaction rate close to 90%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-light  disabled ">Cancel</button>
                        <button type="button" class="btn btn-success btn-lg next-step-button">Next</button>
                    </div>
                </div>


                <!-- stepper 3 -->

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">

                    <input id="time-slot-input" style="display: none" />
                    <div id="time-slot-picker"></div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-light  disabled ">Cancel</button>
                        <button type="button" class="btn btn-success  btn-lg next-step-button">Next</button>
                    </div>

                </div>

                <!-- stepper-4 -->

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">

                    <span class="text-center mt-5">
                        <h3>Please enter your customer details</h3>
                        <h3>to attach the session to your file.</h3>
                    </span>
                    <div class="text-center">
                        <p>please enter your e-mail address, your first name and your date of birth. If you are
                            already to laserAddict </p>
                    </div>
                    <div class="text-center">
                        <p>customer, the system will recognize you and this appointment will be attached to your
                            customer file. </p>
                    </div>
                    <div class="text-center">
                        <p>If you have never been a LaserAddict customer, please fill in the additional feilds
                            If requested. </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="">

                        </div>
                        <div class="col-lg-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="">
                        </div>

                        <div class="col-lg-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" placeholder="12/03/2001">
                            {{-- <div class="form-text">* Check for existing file...</div> --}}
                        </div>

                    </div>

                    <div class="status-message d-none">
                        Your customer file has been found, you can validate
                    </div>


                    <h4 class="text-center mt-3">Additional Detail</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="last_name" class="form-control" id="lastName" placeholder="">

                        </div>
                        <div class="col-lg-6">
                            <label for="phoneNo" class="form-label">Phone No</label>
                            <input type="text" class="form-control" id="phoneNo" placeholder="">
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-light  disabled ">Cancel</button>
                        <button type="button"
                            class="btn btn-success btn-lg next-step-button valid-profile">valid</button>
                    </div>

                </div>

                <!-- stepper-5 -->

                <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth"
                    data-bs-parent="#accordionExample">
                    <div class="card-body">
                        <style>

                        </style>
                        <!-- html -->
                        <div class="stepper-5">
                            <div class="container">
                                <p class="text-center fs-5 fw-bold">
                                    Does everything look OK? Here is a summary of
                                </p>
                                <p class="text-center fs-5 fw-bold">
                                    your appointment, which will be
                                    confirmed when
                                </p>
                                <p class="text-center fs-5 fw-bold">
                                    you click on "Confirm".
                                </p>
                                <div class="row mt-4">
                                    <!-- Center and Customer Information -->
                                    <div class="col-md-6">
                                        <h6>Center Information</h6>
                                        <div class="d-flex">
                                            <img src="./icons/loc.svg" alt="">
                                            <p class="center-name-final">LaserAddict Grenoble<br>1 Rue des
                                                Pins<br>38000, Grenoble
                                            </p>
                                        </div>
                                        <hr>
                                        <h6>Your Customer Information</h6>
                                        <div class="customer-info">
                                            <div class="mb-2"><img src="./icons/profile.svg" /><span id="customerName"> Mme Loren Doos</span></div>
                                            <div class="mb-2"><img src="./icons/phone.svg" /> <span id="customerPhone">+33 6 XX XX XX XX</span> 
                                            </div>
                                            <div class="mb-2"><img src="./icons//msg.svg" /> <span id="customerEmail">loremipsum@gmail.com</span> 
                                            </div>
                                        </div>
                                        <!-- <div class="mt-2">
                                                <img src="./icons/fb.svg" alt="">
                                            </div> -->
                                        <p class="mt-2">Over 1000+ clients have recovered their habits successfully.
                                        </p>
                                    </div>

                                    <!-- Summary Card -->
                                    <div class="col-md-6">
                                        {{-- <div class="reservation-timer">
                                            Your reservation expires in : <img src="./icons/time.svg" />
                                        </div> --}}
                                        <div class="summary-card mt-4">
                                            <div class="summary-item">
                                                <img src="./icons/doctor.svg" />
                                                <div>
                                                    <p class="mb-0">Practitioner</p>
                                                    <small>TBD</small>
                                                </div>
                                            </div>
                                            <div class="summary-item">
                                                <img src="./icons//calender.svg" />
                                                <div>
                                                    <p class="mb-0">Date</p>
                                                    <small class="date-final">Wednesday, 17 April 2024</small>
                                                </div>
                                            </div>
                                            {{-- <div class="summary-item">
                                                <img src="./icons/clock.svg" />
                                                <div>
                                                    <p class="mb-0">Start Time</p>
                                                    <small class="time-final">08h - 09h</small>
                                                </div>
                                            </div> --}}
                                            <div class="summary-item">
                                                <img src="./icons/stop.svg" />
                                                <div>
                                                    <p class="mb-0">Laser Session</p>
                                                    <h6 class="service-final">Stop Candbio</h6>
                                                    <p class="duration-final">Duration: 1 hour</p>
                                                </div>
                                                <div class="ms-auto price-final">€ 290</div>
                                            </div>
                                            <hr>
                                            <div class="total-price">
                                                <p>Total:</p>
                                                <h6 class="price-final">290€</h6>
                                            </div>
                                            <div class="btn-container">
                                                <button type="button"
                                                    class="btn btn-success btn-confirm">Confirm</button>
                                                <button type="button"
                                                    class="btn btn-secondary btn-back">Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="{{ asset('website_script.js') }}"></script>
    <script src="{{ asset('time_slot_picker.js') }}"></script>
</body>

</html>
