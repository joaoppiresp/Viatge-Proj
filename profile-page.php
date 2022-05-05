<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Viatge profile page">
    <meta name="keywords" content="admin,admin dashboard,admin panel,dashboard,statistics, travel planning">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />
    <!-- TITLE -->
    <title>Profile</title>

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

<body class="app sidebar-mini ltr" onload="profile.js">

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.php">
                            <img src="../assets/images/brand/logo3-white.png" class="header-brand-img desktop-logo" alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input class="form-control" placeholder="Search for results..." type="search">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.php">
                            <img src="../assets/images/brand/logo3-grey.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/logo2-grey.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="../assets/images/brand/logo2-white.png" class="header-brand-img light-logo" alt="logo">
                            <img src="../assets/images/brand/logo3-white.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="index.php"><i class="side-menu__icon fa fa-superpowers" aria-hidden="true"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="Pagina-inicial.php"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Home</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="profile-page.php"><i class="side-menu__icon fa fa-user-o" aria-hidden="true"></i><span class="side-menu__label">Profile</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fa fa-map-o" aria-hidden="true"></i><span class="side-menu__label">Travel Plans</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Spain Trip</a></li>
                                    <li><a href="" class="slide-item">Australia Trip</a></li>
                                    <li><a href="" class="slide-item">Vacation to India</a></li>
                                    <li><a href="" class="slide-item">Summer in Portugal</a></li>
                                </ul>
                            </li>

                            <li class="sub-category">
                                <h3>Extra</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="index.php"><i class="side-menu__icon fa fa-file" aria-hidden="true"></i><span class="side-menu__label">About Us</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="index.php"><i class="side-menu__icon fa fa-flag-o" aria-hidden="true"></i><span class="side-menu__label">Terms&Conditions</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="index.php"><i class="side-menu__icon fa fa-calendar" aria-hidden="true"></i><span class="side-menu__label">Calendar</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fa fa-commenting-o"></i><span class="side-menu__label">Support</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Contacts</a></li>
                                    <li><a href="profile-page.php" class="slide-item">Open Cases</a></li>
                                    <li><a href="notify-list.html" class="slide-item">FAQs</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Profile</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row" id="user-profile">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="wideget-user mb-2">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="row">
                                                        <div class="panel profile-cover">
                                                            <div class="profile-cover__action bg-img"></div>
                                                            <div class="profile-cover__img">
                                                                <div class="profile-img-1">
                                                                    <img src="../assets/images/users/marcus-aurelius.png" alt="img">
                                                                </div>
                                                                <div class="profile-img-content text-dark text-start">
                                                                    <div class="text-dark">
                                                                        <h3 class="h3 mb-2" id="profile-name">Marcus Aurelius</h3>
                                                                        <h5 class="text-muted" id="profile-role">Admin</h5>
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
                                <div class="space-div"></div>
                                <div class="col-xl-13">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Edit Profile</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default active">
                                                        <div class="panel-heading " role="tab" id="headingOne1">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                                    Upload Profile Photos
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                            <div class="panel-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div>
                                                                            <input id="demo" type="file" name="files" accept="image/jpeg, image/png" multiple>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-end">
                                                                        <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                                                        <a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default mt-2">
                                                        <div class="panel-heading " role="tab" id="headingOne1">
                                                            <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                                    Edit Password
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                                            <div class="panel-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Current Password</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="password" placeholder="Current Password">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">New Password</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="password" placeholder="New Password">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Confirm Password</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="password" placeholder="Confirm Password">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-end">
                                                                        <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                                                        <a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default mt-3">
                                                        <div class="panel-heading" role="tab" id="headingTwo3">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                                    Edit Email
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo3">
                                                            <div class="panel-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Current Email</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="text" placeholder="Current Email">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">New Email</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="text" placeholder="New Email">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Confirm Email</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="text" placeholder="Confirm Email">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-end">
                                                                        <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                                                        <a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default mt-4">
                                                        <div class="panel-heading" role="tab" id="heading4">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                                    Edit Username
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                                            <div class="panel-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Current Username</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="text" placeholder="Current Username">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">New Username</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="text" placeholder="New Username">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Confirm Username</label>
                                                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                                                </a>
                                                                                <input class="input100 form-control" type="text" placeholder="Confirm Username">
                                                                            </div>
                                                                            <!-- <input type="password" class="form-control" value="password"> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-end">
                                                                        <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                                                        <a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- PANEL-GROUP -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="main-profile-contact-list">
                                                    <div class="me-5">
                                                        <div class="media mb-4 d-flex">
                                                            <div class="media-icon bg-secondary bradius me-3 mt-1">
                                                                <i class="fe fe-edit fs-20 text-white"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="text-muted">Plans Created</span>
                                                                <div class="fw-semibold fs-25">
                                                                    32
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="me-5 mt-5 mt-md-0">
                                                        <div class="media mb-4 d-flex">
                                                            <div class="media-icon bg-danger bradius text-white me-3 mt-1">
                                                                <span class="mt-3">
                                                                    <i class="fe fe-users fs-20"></i>
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="text-muted">Friends</span>
                                                                <div class="fw-semibold fs-25">
                                                                    57
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="me-0 mt-5 mt-md-0">
                                                        <div class="media">
                                                            <div class="media-icon bg-primary text-white bradius me-3 mt-1">
                                                                <span class="mt-3">
                                                                    <i class="fe fe-cast fs-20"></i>
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="text-muted">Destinations Visited</span>
                                                                <div class="fw-semibold fs-25">
                                                                    150
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-13">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Your Latest News</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="media media-xs overflow-visible">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/12.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">John Paige</a>
                                                            <p class="text-muted mb-0">I just created a new trip, check it out!</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/2.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Peter Hill</a>
                                                            <p class="text-muted mb-0">Updated the budget on our Spain trip</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/9.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Irene Harris</a>
                                                            <p class="text-muted mb-0">Accepted request to join Australia Vacation Plan</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/4.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Harry Fisher</a>
                                                            <p class="text-muted mb-0">I added the Museum visit to the plan.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-div-2"></div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Best Friends</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="user-pro-1">
                                                    <div class="media media-xs overflow-visible">
                                                        <!--<img class="avatar brround avatar-md me-3" src="../assets/images/users/2.jpg" alt="avatar-img">-->
                                                        <span class="avatar cover-image avatar-md brround me-3 bg-primary">JP</span>
                                                        <div class="media-body valign-middle">
                                                            <a href="" class=" fw-semibold text-dark">John Paige</a>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
                                                        <div class="media-body valign-middle mt-0">
                                                            <a href="" class="fw-semibold text-dark">Lillian Quinn</a>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <span class="avatar cover-image avatar-md brround me-3 bg-primary">HF</span>
                                                        <div class="media-body valign-middle mt-0">
                                                            <a href="" class="text-dark fw-semibold">Harry Fisher</a>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
                                                        <div class="media-body valign-middle mt-0">
                                                            <a href="" class="fw-semibold text-dark">Irene Harris</a>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Viatge</a>. Have fun planning your
                        next trip!
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../assets/js/jquery.sparkline.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

    <!-- PROFILE SCRIPT -->
    <script src="../assets/js/profile.js" type="text/javascript"></script>

    <!-- ACCORDION JS -->
    <script src="../assets/plugins/accordion/accordion.min.js"></script>
    <script src="../assets/plugins/accordion/accordion.js"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="../assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="../assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="../assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="../assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="../assets/plugins/fancyuploder/fancy-uploader.js"></script>

</body>

</html>