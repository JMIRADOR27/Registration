<?php

$serverip = "localhost";

//Live Connection Credentials
$username = "mkadmin";
$password = "M@int@N@nc3";
$dbname = "register_db";

// $username = "root";
// $password = "root";
// $dbname = "registration";

// $username = "root";
// $password = "";
// $dbname = "register_db";

// Create connection
global $conn;
$conn = new mysqli($serverip, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Set download variable to 1 to show app download links
$download = 1;

?>

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
    .carousel-control-prev,
    .carousel-control-next {
        display: block !important;
    }

    body {
        font-family: 'Montserrat', sans-serif;
    }

    a {
        text-decoration: none;
    }

    .masthead {
        padding-top: 6rem !important;
    }

    .about-us {
        padding-top: 2.5rem !important;
    }

    #features {
        padding-top: 2.5rem !important;
        padding-bottom: 0rem !important;
    }

    .blue-font {
        color: #0b4b88;
    }

    .blue-font-strong {
        color: #0b4b88;
        font-weight: bolder;
    }

    .features-icon {
        /* font-size: 120px !important; */
        width: 150px;
    }

    .media-image {
        width: 100%
    }

    .media-heading {
        margin-top: 10px;
        text-align: center;
        color: #0b4b88;
    }

    .card {
        height: 350px;
    }

    .carousel-control-prev-icon {
        background-image: url('assets/img/prev.png') !important;
        margin-right: 160px;
    }

    .carousel-control-next-icon {
        background-image: url('assets/img/next.png') !important;
        margin-left: 160px;
    }

    @media (max-width: 1301px) {
        .carousel-control-next {
            right: 30px !important;
        }
    }

    @media (max-width: 1201px) {
        .carousel-control-next {
            right: 50px !important;
        }
    }

    @media (max-width: 769px) {

        .carousel-control-prev,
        .carousel-control-next {
            display: none !important;
        }

        #media-heading-desktop {
            display: none;
        }

        #media-heading-mobile {
            display: block !important;
        }

        #carousel-desktop {
            display: none;
        }

        #carousel-mobile {
            display: block !important;
        }

        #biyahe-desktop {
            display: none;
        }

        #video_desktop {
            display: none;
        }

        #video_mobile {
            display: block !important;
        }

        #download {
            background-image: url('assets/img/DH_GET_APP_NOW_MOBILE.png') !important;
            margin-top: 0rem !important;
        }

        #biyahe-mobile {
            display: block !important;
            width: 30vh !important;
        }

        #biyahe-mobile-image {
            margin-bottom: 40px;
            width: 30vh;
        }

        .masthead {
            padding-top: 6rem !important;
        }

        .about-us {
            padding-top: 2.5rem !important;
        }

        .mpt-logo {
            width: 250px !important;
        }

        .features-icon {
            /* font-size: 120px !important; */
            width: 100px;
        }

        .contact-us {
            font-size: 17px
        }

        .mobile-download {
            display: block !important;
        }

        .desktop-download {
            display: none !important;
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
        /* background-image: url('assets/img/header.png'); */
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        /* background-attachment: absolute; */
        background-color: #f8f9fa;
        /* margin-top: 4rem; */

    }

    #download {
        /* border: 1px solid black; */
        height: 100%;
        background-image: url('assets/img/DH_GET_APP_NOW.png');
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        background-attachment: absolute;
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

    .meet-content {
        font-family: 'Montserrat', sans-serif;
        font-weight: 500 !important;
        text-align: justify;
        color: black;
    }
</style>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-12">
            <a class="navbar-brand fw-bold" href="#page-top"><img src="assets/img/logo.png" alt="drivehub-logo" style="width: 100%; max-width: 200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="display: none !important;">
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

    <section class="masthead">
        <video playsinline autoplay loop muted id="video_desktop" style="width: 100%; margin-top: -40px">
            <source type="video/mp4" src="assets/video/desktop-video.mp4" />
        </video>

        <video playsinline autoplay loop muted id="video_mobile" style="width: 100%; margin-top: -20px; display: none">
            <source type="video/mp4" src="assets/video/mobile-video.mp4" />
        </video>
    </section>

    <section id="brief-about" class="masthead about-us">
        <div class="container header-content px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <center>
                            <img src="assets/img/logo_h.png" alt="..." data-aos="fade-right" data-aos-delay="100" style="margin-bottom: 40px; width: 100%; max-width: 300px">
                        </center>
                        <!-- <h1 class="display-1 lh-1 mb-3">Sarap ng Biyahe.</h1> -->
                        <h4 class="blue-font text-center" data-aos="fade-right" data-aos-delay="150" style="margin-bottom: 40px">Meet MPT DriveHub - your new road travel companion app!</h4>
                        <div class="meet-content">
                            <p data-aos="fade-right" data-aos-delay="100">
                                From planning your trips to breezing through Metro Pacific Tollway Corporation's expressways, this road companion app will make your journey easier, safer, faster, and more fun.
                            </p>
                            <p data-aos="fade-right" data-aos-delay="100">
                                MPT DriveHub lessens the hassles on the road so start your vacation even before you reach your destination!
                            </p>
                        </div>
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
                                    <video playsinline autoplay loop muted style="max-width: 100%; height: 100%">
                                        <source src="assets/video/device-video.mp4" type="video/mp4" />
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
                <div data-aos="fade-up" data-aos-delay="100">What's new with <br></div>
                <img class="mpt-logo" src="assets/img/logo_h1.png" alt="..." data-aos="fade-up" data-aos-delay="150" style="width: 100%; max-width: 350px">
            </h1>
            <hr>
            <div class="row">
                <div class="col-md-6 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font">
                        <img class="features-icon" src="assets/img/feature-icons/DH_Icons_Find Reload_RFID.png">
                    </div>
                    <h4 class="text-center blue-font">
                        Check your balance and reload your RFID account
                    </h4>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Know how much load is left in your RFID account. No surprises there!
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Reload anytime, and it gets credited almost instantly.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font">
                        <img class="features-icon" src="assets/img/feature-icons/car-charger.png">
                    </div>
                    <h3 class="text-center blue-font">
                        Compute your Toll Fees
                    </h3>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Know how much load you have to have hitting the road.
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            The only app that can compute your toll fee from the toll plaza you’re coming from, to where you’re exiting.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font">
                        <img class="features-icon" src="assets/img/feature-icons/DH_Icons_Traffic_Alerts.png">
                    </div>
                    <h3 class="text-center blue-font">
                        Updates with real-time traffic alerts
                    </h3>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Anticipate traffic conditions on your way
                        </div>
                        <!-- <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Cut your travel time with our live traffic advisory
                        </div> -->

                    </div>
                </div>
                <div class="col-md-6 col-12" style="margin-bottom: 40px;">
                    <div class="text-center blue-font">
                        <img class="features-icon" src="assets/img/feature-icons/DH_Icons_Emergency_Call.png">
                    </div>
                    <h3 class="text-center blue-font">
                        Calls for roadside emergency assistance
                    </h3>
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
                    <div class="text-center blue-font">
                        <img class="features-icon" src="assets/img/feature-icons/DH_Icons_Find_Gas_Stations.png">
                    </div>
                    <h3 class="text-center blue-font">
                        Finds gas stations, restos, and restrooms
                    </h3>
                    <div class="row" style="font-size: 16px">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            Gas empty? Hungry? Wiwi break? Or just need to stretch?
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-circle-check bullet-point-check"></i>
                        </div>
                        <div class="col-11">
                            MPT DriveHub will show you the way!
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="download">

        <div class="desktop-download" style="height: 35vw; padding-left: 7vw">
            <?php if ($download == 1) { ?>
                <div class="row" style="padding-top: 17vw; ">
                    <div class="row col-md-6">

                        <div class="col-md-4" style="text-align: center;">
                            <img src="assets/img/qr_android.png" alt="..." style="width: 100%; margin-bottom: 10px; " />
                            <a href="https://play.google.com/store/apps/details?id=com.outsystemsenterprise.mptc.DriveHubProd" target="_blank"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." style="width: 100%;" /></a>
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <img src="assets/img/qr_ios.png" alt="..." style="width: 100%; margin-bottom: 10px;" />
                            <a href="https://apps.apple.com/us/app/mpt-drivehub/id1600499395" target="_blank"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." style="width: 100%;" /></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="container mobile-download" style="height: 500px; display: none">
            <?php if ($download == 1) { ?>
                <div class="row" style="padding-top: 100px">
                    <div class="col-1">
                    </div>
                    <div class="col-5">
                        <a href="https://play.google.com/store/apps/details?id=com.outsystemsenterprise.mptc.DriveHubProd">
                            <img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." style="width: 100%" />
                        </a>
                    </div>
                    <div class="col-5">
                        <a href="https://apps.apple.com/us/app/mpt-drivehub/id1600499395">
                            <img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." style="width: 100%" />
                        </a>
                    </div>
                    <div class="col-1">
                    </div>
                </div>
            <?php } ?>
        </div>

    </section>

    <section id="about" class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0">
                        <img class="img-fluid" src="assets/img/DH_About_Image 800x800.png" alt="..." />
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <img class="mpt-logo" src="assets/img/logo_h1.png" alt="..." style="width: 100%; max-width: 250px; margin-bottom: 0px">
                    <hr>
                    <p align="justify">
                        Heavy traffic? Tired of the daily hassles?
                    </p>
                    <p align="justify">
                        We feel you.
                    </p>
                    <p align="justify">
                        It’s so stressful to travel in the Philippines, and as the biggest toll road operator here, we believe we can do more to improve mobility in the country and so we’re here to create better travel and road experiences for you!
                    </p>
                    <p align="justify">
                        We at <strong>Metro Pacific Tollways Corp.</strong> are going beyond tollways. We’re innovating to bring you <strong class="blue-font-strong">MPT DriveHub, your new travel companion app.</strong>
                    </p>
                    <p align="justify">
                        With <strong class="blue-font-strong">MPT DriveHub</strong>, get rid of the hassles on the road so you can happily hustle in life!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php

    $query1 = "select * from posts where p_hide is null
    order by p_order, p_id;";
    $exec1 = mysqli_query($conn, $query1);
    $exec2 = mysqli_query($conn, $query1);

    ?>

    <section id="pressrelease" style="background-color: white;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-md-4">
                    <img src="assets/post/DH_Press_release.png" style="width: 100%;">
                </div>
                <div class="col-md-8">
                    <p>PRESS RELEASE</p>
                    <h4 class="blue-font">MPTC steps up on the digital expressway experience with MPT DriveHub</h4>
                    <hr>
                    <p align="justify">
                        Metro Pacific Tollways Corp. (MPTC), the largest expressway builder and operator in the Philippines, is transcending its core business, foraying into the digital space with the introduction of MPT DriveHub, a travel companion app, offering a variety of mobility solutions that create better user travel experience.
                        <br><br>
                        <a href="pressrelease.php">Read More...</a>
                    </p>
                </div>
            </div>
        </div>
        <br>
    </section>


    <section id="media_posts" class="bg-light" style="margin-top: -80px; display: block">
        <div class="container">
            <div id="media-heading-desktop">
                <h1 class="text-center blue-font"><img class="mpt-logo" src="assets/img/logo_h1.png" alt="..." style="width: 100%; max-width: 200px; padding-bottom: 10px"> on the media! </h1>
            </div>
            <div id="media-heading-mobile" style="display: none;">
                <h1 class="text-center blue-font"><img class="mpt-logo" src="assets/img/logo_h1.png" alt="..." style="width: 100%; max-width: 200px; "><br>on the media </h1>
            </div>
            <br>

            <div id="carousel-desktop" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php

                    $ctr = 0;
                    $i = 0;

                    while ($i1 = mysqli_fetch_object($exec1)) { ?>
                        <?php if ($i == 0) {
                            $active = "active";
                        } else {
                            $active = "";
                        }
                        $i++; ?>
                        <?php if ($ctr == 0) { ?>
                            <div class="carousel-item <?php echo $active ?>">
                                <div class="row">
                                <?php }

                            $ctr++;

                                ?>

                                <div class="col-md-3 mb-3">
                                    <a href="<?php echo $i1->p_link ?>" target="_blank">
                                        <div class="card">
                                            <img class="media-image" src="assets/post/<?php echo $i1->p_image ?>" alt="..." style="width: 100%" />
                                            <div class="card-body">
                                                <h5 class="media-heading"><?php echo $i1->p_title ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <?php
                                if ($ctr == 4 || $i == mysqli_num_rows($exec1)) { ?>
                                </div>
                            </div>
                        <?php $ctr = 0;
                                } ?>
                    <?php
                    } ?>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-desktop" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-desktop" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div id="carousel-mobile" class="carousel slide" data-bs-ride="carousel" style="display: none">
                <div class="carousel-inner">

                    <?php

                    $i = 0;

                    while ($i2 = mysqli_fetch_object($exec2)) {

                        if ($i == 0) {
                            $active = "active";
                        } else {
                            $active = "";
                        }

                    ?>
                        <div class="carousel-item <?php echo $active ?>">
                            <a href="<?php echo $i2->p_link ?>" target="_blank">
                                <div class="card">
                                    <img class="media-image" src="assets/post/<?php echo $i2->p_image ?>" alt="..." style="width: 100%" />
                                    <div class="card-body">
                                        <h5 class="media-heading"><?php echo $i2->p_title ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php

                        $i++;
                    }

                    ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-mobile" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-mobile" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-4 text-center" style="margin-bottom: 20px">
                    <video playsinline controls poster="assets/img/video/MPT_DH_Logo_with_the_mobile_phone_597x315.png" style="width: 100%;">
                        <source type="video/mp4" src="assets/video/MPT_DriveHub_Product_AVP.mp4" />
                    </video>
                    Say hello to MPT DriveHub, your new road travel companion app!
                </div>
                <div class="col-md-4 text-center" style="margin-bottom: 20px">
                    <video playsinline controls poster="assets/img/video/MPT_DH_logo_NRW_logo_597x315.png" style="width: 100%;">
                        <source type="video/mp4" src="assets/video/MPTC_Lifestyle.mp4" />
                    </video>
                    The NLEX Road Warriors went on a trip with MPT DriveHub!
                </div>
                <div class="col-md-4 text-center" style="margin-bottom: 20px">
                    <video playsinline controls poster="assets/img/video/MPT_DH_logo_James_Deakin.png" style="width: 100%;">
                        <source type="video/mp4" src="assets/video/DH_James_Deakin.mp4" />
                    </video>
                    Why MPT DriveHub is James Deakin's perfect partner on the road
                </div>
            </div>
            <div class="col-12">
                <br>
                <h5 class="text-center">
                    <!-- <a href="#" class="btn btn-primary">See more videos...</a> -->
                </h5>
            </div>
        </div>

    </section>





    <section id="faq" style="background-color: white; margin-top: -80px">
        <div class="container">
            <h1 class="text-center blue-font">Ask Away! </h1>
            <br>
            <div class="accordion" id="faq_accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5>
                                Why should I use MPT DriveHub?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            MPT DriveHub will allow you to happily hustle in life by removing the hassles on the road. The app empowers users to smartly plan their trips, transact with our expressways with ease, and get necessary roadside assistance, making their trips safer, more enjoyable, and more convenient. It’s an all-in-one app that gives you the power of mobility at your fingertips.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <h5>
                                Where can I use DriveHub?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            Enjoy MPT DriveHub’s features when you use Metro Pacific's expressways:
                            <br><br>
                            <ul>
                                <li>NLEX (North Luzon Expressway)</li>
                                <li>SCTEX (Subic Clark Tarlac Expressway)</li>
                                <li>CAVITEX (Cavite Expressway)</li>
                                <li>CALAX (Cavite-Laguna Expressway)</li>
                                <li>CCLEX (Cebu-Cordova Link Expressway) - available soon</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwoOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoOne" aria-expanded="true" aria-controls="collapseTwo">
                            <h5>
                                Will other non-MPTC expressways be a part of MPT DriveHub?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseTwoOne" class="accordion-collapse collapse" aria-labelledby="headingTwoOne" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            Yes! We plan to add other expressways and roads into MPT DriveHub. This is part of our goal to become the all-in-one travel companion app for motorists and travellers.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5>
                                How can I reload my RFID account using MPT DriveHub?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            You can reload your RFID account using your credit card, debit card, PayMaya, and GCash.
                            <!-- Just choose from the several payment options below: -->
                            <!-- <ul>
                                <li>E-wallet: GCash, PayMaya, Coins.ph, SmartMoney, Eon, JustPay, ECPay, and TouchPay</li>
                                <li>Online Banking: BDO, UCPB, Metrobank, MasterCard, Visa, and BancNet</li>

                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h5>
                                How long should I wait before I receive my RFID load?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            No more waiting! When you reload, we’ll update your RFID balance in real time.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h5>
                                How safe and secure is MPT DriveHub from hackers?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="collapseFive" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            Don't worry because we invested a lot on this app, especially on security. Our data is stored in a protected facility that's being checked and tested by internal and external experts on information security. We also comply with all laws and regulations on data protection and privacy.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h5>
                                Why does the app ask for log-in credentials every time I open it?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="collapseSix" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            This is an added layer of security to protect your data and prevent phishing scams. Try using biometrics to log in -- it's so fast and convenient!
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="display: none;">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <h5>
                                What will be the future features of MPT DriveHub?
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="collapseSeven" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                            In the future, MPT DriveHub will house other travel and motoring digital solutions such as advanced parking services, towing and roadside services, a motorists’ market, insurance availment, electric vehicle charging locator map, and a native e-wallet, among others.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="h5 bg-light text-center">
        <h1 class="text-center blue-font"><i class="fa-solid fa-headset" style="color: #e1761a"></i> Let's talk! Drop us a line: </h1>
        <br>
        <p class="contact-us">
            Hotline: 1-35000<br>
            Email: customercare@mptdrivehub.com.ph<br>
            Facebook: facebook.com/MPTDriveHubPH<br>
            Twitter: twitter.com/MPTDriveHub<br>
            Instagram: instagram.com/mptdrivehub<br>
        </p>

    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Metro Pacific Tollways Corporation 2022. All Rights Reserved.</div>
                <a href="#!" data-bs-toggle="modal" data-bs-target="#privacy_policy">Privacy Policy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!" data-bs-toggle="modal" data-bs-target="#terms_conditions">Terms and Conditions</a>


            </div>
        </div>
    </footer>

    <div id="press_release" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Press Release</h4>
                </div>
                <div class="modal-body">

                    <h5 class="text-center blue-font">MPTC steps up on the digital expressway experience with MPT DriveHub</h5>
                    <hr>
                    <div class="container" style="height: 400px; overflow-y: auto">
                        <p align="justify">
                            Metro Pacific Tollways Corp. (MPTC), the largest expressway builder and operator in the Philippines, is transcending its core business, foraying into the digital space with the introduction of MPT DriveHub, a travel companion app, offering a variety of mobility solutions that create better user travel experience.
                        </p>
                        <p align="justify">
                            MPT DriveHub is a crucial component in actualizing MPTC’s revitalized vision of becoming a premier mobility enabler. Integrating motoring and travel services in one digital platform, MPT DriveHub elevates customer experience, allowing expressway users to enjoy not just the destination, but the journey itself.
                        </p>
                        <p align="justify">
                            “With the growing demand for mobility solutions amid an accelerated digital transformation in the Philippines, we found it necessary to strengthen our pursuit for innovation. MPT DriveHub is part of our business diversification initiatives that will help realize our goal of providing the ultimate mobility experience to our motorists,” MPTC President and CEO Rodrigo Franco said.
                        </p>
                        <p align="justify">
                            Available for both iOS and Android devices, MPT DriveHub empowers motorists to smartly and conveniently plan their trips – from ensuring that they have ample load on their RFID accounts to navigating through the expressway with ease. An all-in-one app, MPT DriveHub’s features can be categorized into three key functions: RFID Transactions, Trip Planning, and Roadside Assistance.
                        </p>
                        <p align="justify">
                            MPT DriveHub enables its users to easily manage their RFID accounts. Whether to check their balances or reload their accounts, it ensures a smoother and more efficient journey. It also allows users to easily calculate their toll fees to prepare payments ahead.
                        </p>
                        <p align="justify">
                            Moreover, MPT DriveHub gives its users the power of information, providing them with the necessary data to plan and schedule their journey. With this feature, users will be able to know where the nearest pit stops are for dining, bathroom breaks, gas-ups, or even shopping for last-minute pasalubong. MPT DriveHub also provides users with relevant traffic advisory and updates.
                        </p>
                        <p align="justify">
                            Lastly, MPT DriveHub allows users to immediately request for roadside assistance by readily having the expressway hotline number in the app, so help is one call away wherever you are in NLEX, SCTEX, CAVITEX or CALAX.
                        </p>
                        <p align="justify">
                            “This is just the beginning for MPT DriveHub. We are actively developing the app to introduce more services in the future such as e-wallets, motorists’ marketplace, and electric vehicle charging locator map to equip our motorists with more solutions that will further enhance and delight their journeys,” MPT Mobility Vice President for Business Development Mark Richmund M. De Leon said. “We’re open to partnerships and app integrations to accelerate the MPT DriveHub’s service offerings,” he added.
                        </p>
                        <p align="justify">
                            “As the largest tollway builder and operator in the Philippines, we recognize that we have a huge role to play in improving mobility in the country, which can be addressed through digital innovations like MPT DriveHub. Innovation is ingrained in the DNA of MPTC and we are committed to continuous progress and transformation in order to provide easier, safer, and better travels for everyone,” MPTC Chief Digital and Information Officer Carlo L. Cagalingan said.
                        </p>
                        <p align="justify">
                            MPT DriveHub will be available for RFID users of MPTC’s network of expressway, namely: North Luzon Expressway (NLEX), Subic-Clark-Tarlac Expressway (SCTEX), Manila-Cavite Toll Expressway (CAVITEX), and the Cavite-Laguna Expressway (CALAX) on March 1. Soon, MPT DriveHub will also be available for use in the Cebu-Cordova Link Expressway (CCLEX)
                        </p>

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="privacy_policy" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Privacy Policy</h4>
                </div>
                <div class="modal-body">

                    <embed src="assets/file/MPT_DriveHub_Privacy Policy_03012022.pdf" frameborder="0" width="100%" height="400px">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="terms_conditions" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Terms and Conditions</h4>
                </div>
                <div class="modal-body">

                    <embed src="assets/file/MPT_DriveHub_TC_03012022.pdf" frameborder="0" width="100%" height="400px">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php

    include "assets/include.php";

    ?>
</body>


</html>