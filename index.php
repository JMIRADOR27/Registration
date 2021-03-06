<?php
include 'actions/connection.php';
$sql = "SELECT * FROM registrants";
$stmt = $conn->query($sql);
if (mysqli_num_rows($stmt) >= 5000) {
    header('location: capacitylimit.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/logo-1.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <!-- Main css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />


</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->
    <div class="back-to-home rounded d-sm-block">
        <a href="login.php" class="btn btn-icon btn-soft-primary" style="display: none"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-auth-home d-table w-100" style="margin-top: -100px">
        <div class="container">
            <div class="row align-items-center" >
                <div class="col-lg-6 col-md-6">
                    <div class="me-lg-5">
                        <img src="images/logo-2.png" class="img-fluid d-block mx-auto" style="width:180px;height:160px" alt="">
                        <div style="text-align:justify">
                        <h5><i class="uil uil-calculator"></i> Toll fee calculator</h5>
                        <h5><i class="uil uil-capture"></i> RFID balance inquiry and reloading</h5>
                        <h5><i class="uil uil-traffic-light"></i> Travel and traffic advisories</h5>
                        <h5><i class="uil uil-no-entry"></i>Roadside assistance</h5>
                        <h5><i class="uil uil-location-arrow"></i> Facilities locator</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Register Now!</h4>
                            <form class="login-form mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="First Name" name="fname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="Last Name" name="lname" required>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Age <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="calendar" class="fea icon-sm icons"></i>
                                                <input type="text" maxlength="3" class="form-control ps-5 age" name="age" placeholder="Age" required>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Choose a device you'll install to<span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="smartphone" class="fea icon-sm icons"></i>
                                                <select class="form-control ps-5" name="device" required>
                                                    <option value="" selected disabled>--Select a Device--</option>
                                                    <option value="Android">Android</option>
                                                    <option value="Iphone">iPhone / iOS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-6">
                                            <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5 cnumber" name="cnumber" minlength="13" maxlength="13" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
 
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email" name="email" required>
                                                <p style="font-size: 12px">Make sure this email is registered to Google Play Store of App Store.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12" style="display: none">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="g-recaptcha" data-sitekey="6LeGJjMdAAAAAKQ-w5XKGslK1VXmKmRC9vnfAPaI"></div>
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Register</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <!-- 
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="login.html" class="text-dark fw-bold">Sign in</a></p>
                                    </div> -->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Modal -->
    <div class="modal fade" id="modalView" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Notice</h5>
                </div>
                <div class="modal-body">
                    Please make sure that the email you will use to register is registered to the Google Play Store if you're using Android, or the App Store if you are using iPhone
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="modalclose();">I Understand</button>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <!-- cleave -->
    <script src="js/cleave.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script>
        new Cleave('.cnumber', {
            numericOnly: true,
            prefix: '+63',
        });

        function modalclose() {
            $('#modalView').modal('hide');
        }

        //  ajax submit       
        $(function() {
            $('#preloader').hide();
            $('#modalView').modal('show');
            // $('#birthday').change(function(){
            //     var today = new Date();
            //     var birthDate = new Date($('#birthday').val());
            //     var age = today.getFullYear() - birthDate.getFullYear();
            //     var m = today.getMonth() - birthDate.getMonth();
            //     if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            //         age;
            //     }
            //     $('.age').val(age);
            //   });

            $('form').on('submit', function(e) {

                e.preventDefault();

                $.ajax({
                    type: 'post',
                    dataType: 'JSON',
                    url: 'actions/action_registration.php',
                    data: $('form').serialize(),
                    beforeSend: function() {
                        $('#preloader').show();
                    },
                    success: function(data) {
                        $('#preloader').hide();
                        if (data.status == 1) {
                            alert(data.message);

                        } else if (data.status == 3) {
                            alert(data.message);
                        } else {
                            alert(data.message);
                        }
                    },
                    error: function(request, err) {
                        console.log(err);
                    }
                });

            });

        });
    </script>
    <!-- Main Js -->
    <script src="js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>