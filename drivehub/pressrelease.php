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
    <title>MPT DriveHub - Press Release</title>
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

    a {
        text-decoration: none;
    }

    .masthead {
        padding-top: 10rem !important;
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

    @media (max-width: 769px) {

        .masthead {
            padding-top: 8rem !important;
        }

        .press-content {
            margin-right: 20px;
            margin-left: 20px;
            font-size: 16px !important;
        }

        .mpt-logo {
            width: 250px !important;
        }

    }

    @media (max-width: 280px) {
        .navbar-brand {
            width: 120px !important;
        }
    }
</style>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-12">
            <a class="navbar-brand fw-bold" href="index.php"><img src="assets/img/logo.png" alt="drivehub-logo" style="width: 100%; max-width: 200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="display: none !important;">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="index.php">Home</a></li>
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
        <div class="container">
            <h2 class="text-center blue-font">MPTC steps up on the digital expressway experience with MPT DriveHub</h2>
            <hr>
            <div class="press-content" style="font-size: 18.5px">
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
        </div>
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