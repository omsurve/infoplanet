<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Info Planet | Programming Classes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../info.png">

    <!-- Layout config Js -->
    <script src="./assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="./assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./assets/js/jquery.validate.min.js" type="text/javascript"></script>

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                            <div class="row g-0">
                            

                                <div class="col-lg-6 offset-lg-3">
                                <div class="card">
                                    <div class="p-lg-5 p-4" >
                                        <div>
                                            <h5 class="text-primary">Welcome To Info Planet !</h5>
                                            <p class="text-muted">Sign in to continue</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" action="login-validate.php" id="login-form">

                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Mobile No <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter mobile number" required>
                                                    <div class="invalid-feedback">
                                                        Please enter mobile number
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" name="password-input" aria-describedby="passwordInput" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Sign In</button>
                                                </div>


                                            </form>


                                          
                                        </div>

                                       
                                       
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

          </div>
    <!-- end auth-page-wrapper -->

    
</body>

</html>
<!-- JAVASCRIPT -->
<script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <script src="./assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="./assets/js/plugins.js"></script>

    <!-- password-addon init -->
    <script src="./assets/js/pages/password-addon.init.js"></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <script src="./assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="./assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="./assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="./assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="./assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="./assets/js/pages/passowrd-create.init.js"></script>
    
<script>
    $(document).keyup(function() {
        $("#login-form").validate({
            rules: {
                mobile_number: {
                    required: true,
                    maxlength: 10,
                    minlength: 10,

                }
            },
            // Specify validation error messages
            messages: {
                mobile_number: {
                    remote: "Phone number already exists, Please contact mess owner"
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                //alert();
                form.submit();
            }
        });

    });
</script>
