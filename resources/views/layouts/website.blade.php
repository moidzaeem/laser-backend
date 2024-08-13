<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Assistant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">
        <p> Make an appointment for a session <span class="icon">👇</span></p>
    </div>


    <div class="container mt-5">
        <!-- logo -->
        <div class="logo">
            <img src="./icons/logo.svg" alt="LaserAddict Logo" class="img-fluid mb-3" />
        </div>
        <div class="text-center">
            <h2>Make an appointment for a</h2>
            <h2>session by booking online</h2>
            <p class="text-muted">Let the wizard guide you</p>
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
                            Choose a center
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2
                        </button>
                        <div class="step-title">
                            Choose a service
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3
                        </button>
                        <div class="step-title">
                            Choose a time slot
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4
                        </button>
                        <div class="step-title">
                            Enter Customer Information
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                            5
                        </button>
                        <div class="step-title">
                            Confirmation
                        </div>
                    </div>
                </div>

                <!-- stepper 1 -->

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">

                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="">


                            <div class="text-center mt-5">
                                <h3>Choosing a LaserAddict center</h3>
                            </div>

                            <!-- box-location -->
                            <div class="location-select">
                                <i class="bi bi-geo-alt-fill location-icon"></i>
                                <span class="location-text">Locate me to see nearest</span>
                                <!-- <i class="bi bi-chevron-down dropdown-arrow"></i> -->
                                <img src="icons/down-btn.svg" alt="">
                            </div>

                            <!-- cards  -->
                            <div class="col">
                                <div class="card card-container">
                                    <div class="card-body">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                            <div class="col">
                                                <div class="custom-card ">
                                                    <div class="card-body">
                                                        <img src="./icons/1.svg" alt="Center 1"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Ambilly</h5>
                                                        <p class="card-text">Haute-Savoie 74</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/2.svg" alt="Center 2"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Grenoble</h5>
                                                        <p class="card-text">Isere 38</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/2.svg" alt="Center 3"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Montbonnot</h5>
                                                        <p class="card-text">Isere 38</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/4.svg" alt="Center 4"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Porto-Vecchio</h5>
                                                        <p class="card-text">Corse-du-sud 2A</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/5.svg" alt="Center 1"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Foix</h5>
                                                        <p class="card-text">Ariege 09</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/6.svg" alt="Center 2"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Marcq-en-</h5>
                                                        <h5 class="card-title">Baroeul</h5>
                                                        <p class="card-text">Nord 59</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/7.svg" alt="Center 3"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Montaigu</h5>
                                                        <p class="card-text">Vendee 85</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/8.svg" alt="Center 4"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Reims</h5>
                                                        <p class="card-text">Marne 51</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/9.svg" alt="Center 5"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Venelles</h5>
                                                        <p class="card-text">Bouches-du-Rhone 13</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/10.svg" alt="Center 6"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">LaserAddict-</h5>
                                                        <h5 class="card-title">Coutances</h5>
                                                        <p class="card-text">La Manche 50</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rating mt-5 text-center">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-google"></i>
                                            <i class="bi bi-facebook text-blue"></i>
                                            <span class="ms-2 font-weight-bold bold" style="font-weight: bold;">A method
                                                approved by over
                                                3,000 customers across
                                                France</span>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="button" class="btn btn-light col-2 disabled ">Cancel</button>
                                            <button type="button" class="btn btn-success col-2   btn-lg">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- stepper 2 -->


                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

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
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                            <div class="col">
                                                <div class="custom-card ">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 1.svg" alt="Center 1"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Stop Cannabis</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 2.svg" alt="Center 2"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Stop Tobacco</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4 ">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 3.svg" alt="Center 3"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Stop Sugar</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4 ">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 4.svg" alt="Center 4"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Tinnitus</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4 ">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 5.svg" alt="Center 1"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Stress Burnout</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4 ">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 6.svg" alt="Center 2"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Menopause</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 7.svg" alt="Center 3"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Insomnia</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4 ">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 8.svg" alt="Center 4"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">Weight Loss</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4">
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-card">
                                                    <div class="card-body">
                                                        <img src="./icons/stepper 9.svg" alt="Center 5"
                                                            class="img-fluid mb-2" />
                                                        <h5 class="card-title">relapse Smoking</h5>
                                                        <p class="card-text">60 minutes</p>
                                                        <div class="rating mt-4">

                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>
                                                            <i class="bi bi-star-fill"
                                                                style="color: rgb(60, 139, 60);"></i></i>

                                                            <i class="bi bi-google"></i>

                                                        </div>
                                                        <h4>60 €</h4>
                                                    </div>
                                                </div>
                                            </div>

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
                            <button type="button" class="btn btn-light col-2 disabled ">Cancel</button>
                            <button type="button" class="btn btn-success col-2   btn-lg">Next</button>
                        </div>
                    </div>
                </div>


                <!-- stepper 3 -->

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <h2></h2>
                        <!-- box-location -->
                        CALENDER

                        <!-- cards  -->

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

                    <form>
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
                                <input type="text" class="form-control" id="dob" placeholder="12/03/2001" disabled>
                                <div class="form-text">* Check for existing file...</div>
                            </div>





                        </div>

                        <div class="status-message">
                            Your customer file has been found, you can validate
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-light  disabled ">Cancel</button>
                            <button type="button" class="btn btn-success    btn-lg">valid</button>
                        </div>
                    </form>

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
                                            <p class="">LaserAddict Grenoble<br>1 Rue des Pins<br>38000, Grenoble</p>
                                        </div>
                                        <hr>
                                        <h6>Your Customer Information</h6>
                                        <div class="customer-info">
                                            <div class="mb-2"><img src="./icons/profile.svg" /> Mme Loren Doos</div>
                                            <div class="mb-2"><img src="./icons/phone.svg" /> +33 6 XX XX XX XX
                                            </div>
                                            <div class="mb-2"><img src="./icons//msg.svg" /> loremipsum@gmail.com
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
                                        <div class="reservation-timer">
                                            Your reservation expires in : <img src="./icons/time.svg" />
                                        </div>
                                        <div class="summary-card mt-4">
                                            <div class="summary-item">
                                                <img src="./icons/doctor.svg" />
                                                <div>
                                                    <p class="mb-0">Practitioner</p>
                                                    <small>Christian Bongiorno</small>
                                                </div>
                                            </div>
                                            <div class="summary-item">
                                                <img src="./icons//calender.svg" />
                                                <div>
                                                    <p class="mb-0">Date</p>
                                                    <small>Wednesday, 17 April 2024</small>
                                                </div>
                                            </div>
                                            <div class="summary-item">
                                                <img src="./icons/clock.svg" />
                                                <div>
                                                    <p class="mb-0">Start Time</p>
                                                    <small>08h - 09h</small>
                                                </div>
                                            </div>
                                            <div class="summary-item">
                                                <img src="./icons/stop.svg" />
                                                <div>
                                                    <p class="mb-0">Laser Session</p>
                                                    <h6>Stop Candbio</h6>
                                                    <p>Duration: 1 hour</p>
                                                </div>
                                                <div class="ms-auto">€ 290</div>
                                            </div>
                                            <hr>
                                            <div class="total-price">
                                                <p>Total:</p>
                                                <h6>290€</h6>
                                            </div>
                                            <div class="btn-container">
                                                <button type="button"
                                                    class="btn btn-success btn-confirm">Confirm</button>
                                                <button type="button" class="btn btn-secondary btn-back">Back</button>
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
    <Script src="Script.js"></Script>
</body>

</html>