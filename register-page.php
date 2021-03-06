<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Viatge register page">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Register</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <img src="../assets/images/brand/logo1-white.png" class="header-brand-img m-0" alt="">
                    </div>
                </div>
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="register-ajax" action="assets/php/authentication/register.php" method="POST">
                            <span class="login100-form-title">
								Registration
							</span>
                            <label for="uename"><b>Name</b></label>
                            <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="User name" name="uename">
                            <label for="uemail"><b>Email</b></label>
                            <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Email" name="uemail">
                            <label for="psw"><b>Password</b></label>
                            <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="psw">
                            <input class="login100-form-btn btn-primary" type="submit" value="Submit" id="btnSubmit">

                            <label class="custom-control custom-checkbox mt-4">
									<input type="checkbox" class="custom-control-input">
									<span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
								</label>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../assets/js/show-password.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

    <!-- REGISTER SCRIPT -->
    <script src="../assets/js/register.js" type="text/javascript"></script>

</body>

</html>