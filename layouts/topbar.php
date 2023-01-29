<?php
session_start();
 if($_SESSION['Status'] != "Logged in") {
    header("Location: login.php");
 }

?>

<header id="page-topbar">

    <div class="navbar-header">

        <div class="d-flex">

            <!-- LOGO -->

            <div class="navbar-brand-box">

                <a href="index.php" class="logo logo-dark">

                    <span class="logo-sm">

                        <img src="public/images/logo.svg" alt="" height="22">

                    </span>

                    <span class="logo-lg">

                        <img src="public/images/logo-dark.png" alt="" height="17">

                    </span>

                </a>



                <a href="index.php" class="logo logo-light">

                    <span class="logo-sm">

                        <img src="public/images/logo-sm.png" alt="" height="22">

                    </span>

                    <span class="logo-lg">

                        <img src="public/images/logo-light.png" alt="" height="35">

                    </span>

                </a>

            </div>



            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">

                <i class="mdi mdi-menu"></i>

            </button>



            <div class="d-none d-sm-block">

                <div class="dropdown pt-3 d-inline-block">

                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        Add <i class="mdi mdi-chevron-down"></i>

                    </a>



                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <a class="dropdown-item" href="#">Add Movies</a>

                        <a class="dropdown-item" href="#">Add Web Series</a>

                    </div>

                </div>

            </div>

        </div>



        <div class="d-flex">

            <!-- App Search-->

            <form class="app-search d-none d-lg-block">

                <div class="position-relative">

                    <input type="text" class="form-control" placeholder="Search..." />

                    <span class="fa fa-search"></span>

                </div>

            </form>



            <div class="dropdown d-inline-block d-lg-none ml-2">

                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <i class="mdi mdi-magnify"></i>

                </button>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">



                    <form class="p-3">

                        <div class="form-group m-0">

                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">

                                <div class="input-group-append">

                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>



            <div class="dropdown d-none d-lg-inline-block">

                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">

                    <i class="mdi mdi-fullscreen"></i>

                </button>

            </div>



            <div class="dropdown d-inline-block">

                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">

                    <i class="mdi mdi-bell-outline"></i>

                    <span class="badge badge-danger badge-pill">3</span>

                </button>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">

                    <div class="p-3">

                        <div class="row align-items-center">

                            <div class="col">

                                <h5 class="m-0 font-size-16"> Notifications (258) </h5>

                            </div>

                        </div>

                    </div>

                    <div data-simplebar style="max-height: 230px;">

                        <a href="" class="text-reset notification-item">

                            <div class="media">

                                <div class="avatar-xs mr-3">

                                    <span class="avatar-title bg-success rounded-circle font-size-16">

                                        <i class="mdi mdi-cart-outline"></i>

                                    </span>

                                </div>

                                <div class="media-body">

                                    <h6 class="mt-0 mb-1">Your order is placed</h6>

                                    <div class="font-size-12 text-muted">

                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>

                                    </div>

                                </div>

                            </div>

                        </a>



                        <a href="" class="text-reset notification-item">

                            <div class="media">

                                <div class="avatar-xs mr-3">

                                    <span class="avatar-title bg-warning rounded-circle font-size-16">

                                        <i class="mdi mdi-message-text-outline"></i>

                                    </span>

                                </div>

                                <div class="media-body">

                                    <h6 class="mt-0 mb-1">New Message received</h6>

                                    <div class="font-size-12 text-muted">

                                        <p class="mb-1">You have 87 unread messages</p>

                                    </div>

                                </div>

                            </div>

                        </a>



                        <a href="" class="text-reset notification-item">

                            <div class="media">

                                <div class="avatar-xs mr-3">

                                    <span class="avatar-title bg-info rounded-circle font-size-16">

                                        <i class="mdi mdi-glass-cocktail"></i>

                                    </span>

                                </div>

                                <div class="media-body">

                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>

                                    <div class="font-size-12 text-muted">

                                        <p class="mb-1">It is a long established fact that a reader will</p>

                                    </div>

                                </div>

                            </div>

                        </a>



                        <a href="" class="text-reset notification-item">

                            <div class="media">

                                <div class="avatar-xs mr-3">

                                    <span class="avatar-title bg-primary rounded-circle font-size-16">

                                        <i class="mdi mdi-cart-outline"></i>

                                    </span>

                                </div>

                                <div class="media-body">

                                    <h6 class="mt-0 mb-1">Your order is placed</h6>

                                    <div class="font-size-12 text-muted">

                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>

                                    </div>

                                </div>

                            </div>

                        </a>



                        <a href="" class="text-reset notification-item">

                            <div class="media">

                                <div class="avatar-xs mr-3">

                                    <span class="avatar-title bg-danger rounded-circle font-size-16">

                                        <i class="mdi mdi-message-text-outline"></i>

                                    </span>

                                </div>

                                <div class="media-body">

                                    <h6 class="mt-0 mb-1">New Message received</h6>

                                    <div class="font-size-12 text-muted">

                                        <p class="mb-1">You have 87 unread messages</p>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>

                    <div class="p-2 border-top">

                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">

                            View all

                        </a>

                    </div>

                </div>

            </div>



            <div class="dropdown d-inline-block">

                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img class="rounded-circle header-profile-user" src="public/images/users/user-4.jpg"
                        alt="Header Avatar">

                </button>

                <div class="dropdown-menu dropdown-menu-right">

                    <!-- item-->

                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profile</a>

                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle mr-1"></i> My

                        Wallet</a>

                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i
                            class="mdi mdi-settings font-size-17 align-middle mr-1"></i> Settings</a>

                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i> Lock

                        screen</a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item text-danger" href="dashboard_api\logout.php"><i
                            class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>

                </div>

            </div>



        </div>

    </div>

</header>



<!-- ========== Left Sidebar Start ========== -->

<div class="vertical-menu">



    <div data-simplebar class="h-100">



        <!--- Sidemenu -->

        <div id="sidebar-menu">

            <!-- Left Menu Start -->

            <ul class="metismenu list-unstyled" id="side-menu">

                <li>

                    <a href="index.php" class="waves-effect">

                        <i class="typcn typcn-home"></i>

                        <span>Dashboard</span>

                    </a>

                </li>



                <li class="menu-title">Contents</li>



                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">

                        <i class="mdi mdi-movie-open"></i>

                        <span>Movies</span>

                    </a>

                    <ul class="sub-menu" aria-expanded="false">

                        <li><a class="typcn typcn-plus" href="add_movie.php"> Add Movies</a></li>

                        <li><a class="typcn typcn-th-list" href="all_movies.php"> All Movies</a></li>

                    </ul>

                </li>



                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">

                        <i class="mdi mdi-movie-roll"></i>

                        <span>Web Series</span>

                    </a>

                    <ul class="sub-menu" aria-expanded="false">

                        <li><a class="typcn typcn-plus" href="add_web_series.php"> Add Web Series</a></li>

                        <li><a class="typcn typcn-th-list" href="all_web_series.php"> All Web Series</a></li>

                    </ul>

                </li>

                <li class="menu-title">Push Notification</li>

                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">

                        <i class="mdi mdi-movie-roll"></i>

                        <span>Notification</span>

                    </a>

                    <ul class="sub-menu" aria-expanded="false">

                        <li><a class="dripicons-broadcast" href="announcement.php"> Announcement</a></li>

                        <li><a class="dripicons-rocket" href="notification_movie.php"> Movies</a></li>
                        <li><a class="dripicons-rocket" href="notification_web_series.php"> Web Series</a></li>

                        <li><a class="mdi mdi-web-box" href="notification_web_view.php"> Web View</a></li>

                        <li><a class="mdi mdi-web" href="notification_external_browser.php"> External Brawser</a></li>

                        <li><a class="typcn typcn-cog" href="notification_setting.php"> Setting</a></li>

                    </ul>

                </li>

                <li class="menu-title">MISCELLANEOUS</li>

                <li>
                    <a href="manage_user.php" class="waves-effect">

                        <i class="fas fa-user"></i>

                        <span>User Manager</span>

                    </a>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">

                        <i class="dripicons-duplicate"></i>

                        <span>Slider</span>

                    </a>

                    <ul class="sub-menu" aria-expanded="false">

                        <li><a class="typcn typcn-image" href="image_slider.php"> Image Slider</a></li>

                        <li><a class="typcn typcn-cog" href="slider_settings.php"> Slider Settings</a></li>

                    </ul>

                </li>

                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">

                        <i class="typcn typcn-cog"></i>

                        <span>Settings</span>

                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a class="typcn typcn-flash" href="api_setting.php"> API Setting</a></li>
                        <!-- <li><a class="mdi mdi-settings" href="image_slider.php"> Dashboard Setting</a></li> -->
                        <li><a class="typcn typcn-vendor-android" href="android_setting.php"> ANDROID Setting</a></li>
                        <li><a class="mdi mdi-currency-usd" href="ads_setting.php"> ADS Setting</a></li>
                        <li><a class="mdi mdi-email-multiple" href="email_setting.php"> EMAIL Setting</a></li>
                    </ul>

                </li>


                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">

                        <i class="dripicons-device-desktop"></i>

                        <span>System</span>

                    </a>

                    <ul class="sub-menu" aria-expanded="false">

                        <li><a class="ion ion-md-git-compare" href="update.php"> Update</a></li>

                    </ul>

                </li>

            </ul>

            </ul>

        </div>

        <!-- Sidebar -->

    </div>

</div>

<!-- Left Sidebar End -->