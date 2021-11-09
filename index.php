

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="css/datepicker.min.css">
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
        <a href="#" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-auth-home d-table w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="me-lg-5">   
                        <img src="images/signup.svg" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Signup</h4>  
                            <form class="login-form mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="First Name" name="fname">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3"> 
                                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="Last Name" name="lname" >
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-6"> 
                                            <label class="form-label">Middle Name</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="Middle Name (optional)" name="mname">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3"> 
                                            <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5 cnumber" name="cnumber" minlength="11" maxlength="11" >
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3"> 
                                            <label class="form-label">Age <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="calendar" class="fea icon-sm icons"></i>
                                                <input type="text" maxlength="3" class="form-control ps-5 age" placeholder="Age" name="age" >
                                            </div>
                                        </div>
                                    </div><!--end col-->
                            

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email" name="email" >
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Register</button>
                                        </div>
                                    </div><!--end col-->
<!-- 
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="login.html" class="text-dark fw-bold">Sign in</a></p>
                                    </div> -->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
     <!-- cleave -->
     <script src="js/cleave.min.js"></script>
     <script src="js/jquery-3.3.1.min.js"></script>
     <script>
        new Cleave('.cnumber', {
            numericOnly: true,
            prefix: '09',
            });

    //  ajax submit       
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            dataType: 'JSON',
            url: 'actions/registration.php',
            data: $('form').serialize(),
            success: function(data) {
              if(data.status == 0){
                  alert('Registration Failed');
              }else{
                alert('Successfully Registered')
              }
            },
            error: function(err){
                alert('form was submitted');
            }
          });

        });

      });
    </script>
    <!-- Main Js -->
    <script src="js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>
</html>