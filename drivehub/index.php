<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MPT DriveHub</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="assets/fontawesome6/css/all.css" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }

    .blue-font {
        color: #0b4b88;
    }

    @media (max-width: 768px) {
        #main_header {
            background-image: url('assets/img/header_mobile.jpg') !important;
            margin-top: 1rem !important;
        }

        #biyahe-mobile {
            display: block !important;
            width: 30vh !important;
        }

        #biyahe-desktop {
            display: none;
        }

        #biyahe-mobile-image {
            margin-bottom: 40px; 
            width: 30vh;
        }

        .masthead {
            padding-top: 3.5rem !important;
        }

        #mpt-logo {
            width: 250px !important;
        }
    }

    @media (max-width: 280px) {
        .navbar-brand {
            width: 120px !important;
        }
    }


    #main_header {
        /* border: 1px solid black; */
        height: 100%;
        background-image: url('assets/img/header.jpg');
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        /* background-attachment: absolute; */
        background-color: #f8f9fa;
        margin-top: 4rem;

    }

    .bullet-point {
        color: black;
        font-weight: 200;
        font-size: 18px;
    }

    .bullet-point-check {
        color: #f1a325;
    }

    .accordion-body {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .accordion-button {
        color: white !important;
        background-color: #3177b9 !important;
    }

    .accordion-button:not(.collapsed) {
        color: white !important;
        background-color: #0b4b88 !important;
    }
</style>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-12">
            <a class="navbar-brand fw-bold" href="#page-top"><img src="assets/img/logo.png" alt="drivehub-logo" style="width: 100%; max-width: 200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#contact">Contact</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal" style="display: none">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Send Feedback</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->

    <section id="main_header">
        <!-- <video id="myVideo" autoplay loop muted>
            <source type="video/mp4" src="assets/video/looping-video.mp4">
        </video> -->
        <center>
            <div class="container">

                <div id="biyahe-desktop" style="margin-bottom: 300px; padding-bottom: 40px;">
                    <img src="assets/img/biyahe.png" alt="..." data-aos="fade-up" data-aos-delay="100" style="width: 100%; max-width: 900px">
                    <h2 class="blue-font text-center" data-aos="fade-up" data-aos-delay="150" style="margin-bottom: 40px">Make your trip as fun as your destination!</h2>
                </div>
                <div id="biyahe-mobile" style="display: none; height: 450px; margin-top: 20px;">
                    <img id="biyahe-mobile-image" src="assets/img/biyahe-mobile.png" alt="..." data-aos="fade-right" data-aos-delay="100" >
                    <h3 class="blue-font" data-aos="fade-right" data-aos-delay="150" style="margin-bottom: 40px">Make your trip as fun as your destination!</h3>
                </div>

            </div>
        </center>


        </div>
    </section>

    <section class="masthead">
        <div class="container header-content px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <center>
                            <img src="assets/img/logo_h.png" alt="..." data-aos="fade-right" data-aos-delay="100" style="margin-bottom: 40px; width: 100%; max-width: 300px">
                        </center>
                        <!-- <h1 class="display-1 lh-1 mb-3">Sarap ng Biyahe.</h1> -->
                        <h4 class="blue-font text-center" data-aos="fade-right" data-aos-delay="150" style="margin-bottom: 40px">Meet MPT DriveHub - your new travel buddy!</h4>
                        <h5 align="justify" data-aos="fade-right" data-aos-delay="100">
                            From planning your trips to breezing through Metro Pacific Tollway Corporation's expressways, this road companion app will make your journey easier, safer, faster, and more fun.</h5>
                        <br>
                        <h5 align="justify" data-aos="fade-right" data-aos-delay="100">
                            MPT DriveHub lessens the hassles on the road so start your vacation even before you reach your destination!
                        </h5>
                        <br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup" data-aos="fade-left" data-aos-delay="150">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                        <source src="assets/img/demo-screen.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Quote/testimonial aside-->

    <!-- App features section-->
    <section id="features_old" style="display: none">
        <div class="container px-12">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-0 mb-5 mb-lg-0">
                    <div class="container-fluid">

                        <div class="h3 row" style="margin-bottom: 12px;">
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="100"><i class="uil uil-calculator"></i></div>
                            <div class="col-md-11 col-10 blue-font" data-aos="fade-left" data-aos-delay="100">Computes your Toll Fee</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="100"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="100"><i class="fa-solid fa-circle-check bullet-point-check"></i> No more counting coins</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="100"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="100"><i class="fa-solid fa-circle-check bullet-point-check"></i> Ready your money with our toll fee calculator.</div>
                            <div class="col-12"><br></div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="150"><i class="uil uil-capture"></i></div>
                            <div class="col-md-11 col-10 blue-font" data-aos="fade-left" data-aos-delay="150">Checks your RFID balance and reloads</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="150"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="150"><i class="fa-solid fa-circle-check bullet-point-check"></i> Last minute top-up? Yes, it's possible!</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="150"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="150"><i class="fa-solid fa-circle-check bullet-point-check"></i> Pull out your phone and buy RFID credits on the road.</div>
                            <div class="col-12"><br></div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="200"><i class="uil uil-traffic-light"></i></div>
                            <div class="col-md-11 col-10 blue-font" data-aos="fade-left" data-aos-delay="200">Shows the fastest route with real-time traffic advisories</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="200"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="200"><i class="fa-solid fa-circle-check bullet-point-check"></i> Never be late again!</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="200"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="200"><i class="fa-solid fa-circle-check bullet-point-check"></i> Cut your travel time with our live traffic updates.</div>
                            <div class="col-12"><br></div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="250"><i class="uil uil-no-entry"></i></div>
                            <div class="col-md-11 col-10 blue-font" data-aos="fade-left" data-aos-delay="250">Calls for roadside emergency assistance</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="250"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="250"><i class="fa-solid fa-circle-check bullet-point-check"></i> When in trouble, just tap our emergency button!</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="250"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="250"><i class="fa-solid fa-circle-check bullet-point-check"></i> Our 24/7 helpline is ready to rescue you whenever, wherever.</div>
                            <div class="col-12"><br></div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="300"><i class="uil uil-location-arrow"></i></div>
                            <div class="col-md-11 col-10 blue-font" data-aos="fade-left" data-aos-delay="300">Finds gas stations, restaurants, and toilets</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="300"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="300"><i class="fa-solid fa-circle-check bullet-point-check"></i> Gas empty? Hungry? Need a break?</div>
                            <div class="col-md-1 col-2" data-aos="fade-left" data-aos-delay="300"></div>
                            <div class="col-md-11 col-10 blue-font bullet-point" data-aos="fade-left" data-aos-delay="300"><i class="fa-solid fa-circle-check bullet-point-check"></i> We will show you the way!</div>
                            <div class="col-12"><br></div>
                        </div>

                        <div class="row gx-5" style="display: none">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Device Mockups</h3>
                                    <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Flexible Use</h3>
                                    <p class="text-muted mb-0">Put an image, video, animation, or anything else in the screen!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display: none">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Free to Use</h3>
                                    <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Open Source</h3>
                                    <p class="text-muted mb-0">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 order-lg-1" data-aos="fade-right" data-aos-delay="50">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                        <source src="assets/img/demo-screen.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <h1 class="text-center">
                <span data-aos="fade-up" data-aos-delay="150">What's new with <br></span>
                <img id="mpt-logo" src="assets/img/logo_h1.png" alt="..." data-aos="fade-up" data-aos-delay="150" style="width: 100%; max-width: 350px">
            </h1>
            <hr>
            <div class="row">
                <div class="col-md-4 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font" style="font-size: 160px">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h4 class="text-center blue-font">
                        Compute your Toll Fees
                    </h4>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            No more counting coins
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Ready your money with our toll fee calculator.
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font" style="font-size: 160px">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <h4 class="text-center blue-font">
                        Updates with real-time traffic alerts
                    </h4>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Running late?
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Cut your travel time with our live traffic advisory
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font" style="font-size: 160px">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h5 class="text-center blue-font">
                        Calls for roadside emergency assistance
                    </h5>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            When in trouble, just tap our emergency button!
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            We’re ready to rescue you whenever, wherever.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font" style="font-size: 160px">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h4 class="text-center blue-font">
                        Finds gas stations, restos, and restrooms
                    </h4>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Gas empty? Hungry? Need a break?
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            MPT DriveHub will show you the way!
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font" style="font-size: 160px">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <h4 class="text-center blue-font">
                        Checks and Reloads your RFID account
                    </h4>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Last minute top-up? Yes, it's possible!
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Pull out your phone and buy RFID credits on the road.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" style="background-color: #e6f3ff">
        <div class="container">
            <h1 class="text-center blue-font">Frequently Asked Questions</h1>
            <br>
            <div class="accordion" id="faq_accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5>
                                Where can I use DriveHub?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            Enjoy MPT DriveHub’s features when you use Metro Pacific's expressways:
                            <br><br>
                            <ul>
                                <li>NLEX (North Luzon Expressway)</li>
                                <li>SCTEX (Subic Clark Tarlac Expressway)</li>
                                <li>SFEX (Subic Freeport Expressway)</li>
                                <li>CAVITEX (Cavite Expressway)</li>
                                <li>CALAX (Calamba Laguna Expressway)</li>
                                <li>CCLEX (Cebu Cordova Link Expressway)</li>
                                <li>NLEX Connector</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5>
                                How can I reload my RFID account using MPT DriveHub?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            Just choose from the several payment options below:
                            <br><br>
                            <ul>
                                <li>E-wallet: GCash, PayMaya, Coins.ph, SmartMoney, Eon, JustPay, ECPay, and TouchPay</li>
                                <li>Online Banking: BDO, UCPB, Metrobank, MasterCard, Visa, and BancNet</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5>
                                How long should I wait before I receive my RFID load?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            No more waiting! When you reload, we’ll update your RFID balance in real time.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h5>
                                Is MPT DriveHub free?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="collapseFour" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            Yes, it’s free and always will be!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h5>
                                I’m in! How can I start?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="collapseFive" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            Great! Just download the app on Google Play or App Store, fill in your details, and you're ready to go!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="h5 bg-light text-center">
        <h1 class="text-center blue-font"><i class="fa-solid fa-headset" style="color: #e1761a"></i> Let's talk! Drop us a line: </h1>
        <br>
        Hotline: +632-8888-0888<br>
        Email: drivehub@mptc.com.ph<br>
        Facebook: facebook.com/drivehub.mptc<br>
        Twitter: twitter.com/drivehubmptc<br>
        Instagram: instagram.com/drivehubmptc<br>

    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Your Website 2021. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>


</html>