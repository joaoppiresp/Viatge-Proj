<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Viatge login page">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,dashboard,statistics, travel planning">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>login</title>

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
                        <img src="../assets/images/brand/logo1-white.png" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                    <span class="login100-form-title pb-5">
                                Login
                            </span>
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <form class="login-ajax" action="assets/php/authentication/login.php" method="POST">
                                                <label for="uemail"><b>Email</b></label>
                                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Email" name="uemail">
                                                <label for="psw"><b>Password</b></label>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="psw">
                                                <input class="login100-form-btn btn-primary" type="submit" value="Submit" id="btnSubmit">

                                                <div class="text-end pt-4">
                                                    <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p>
                                                </div>
                                            </form>        
                                            <div class="text-center pt-3">
                                                <p class="text-dark mb-0">Not a member?<a href="register-page.php" class="text-primary ms-1">Sign UP</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <form class="login100-form validate-form"></form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS 
    <script src="../assets/js/show-password.min.js"></script>
    -->

    <!-- Perfect SCROLLBAR JS
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    -->
    <!-- Color Theme js
    <script src="../assets/js/themeColors.js"></script>
    -->
    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js" type="text/javascript"></script>

    <!-- LOGIN SCRIPT -->
    <script src="../assets/js/login.js" type="text/javascript"></script>

</body>

</html>