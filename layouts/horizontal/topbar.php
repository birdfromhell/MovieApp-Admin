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
                        <img src="public/images/logo-light.png" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm mr-2 font-size-24 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>

        <div class="d-flex">

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="fa fa-search"></span>
                </div>
            </form>

            <div class="dropdown d-none d-md-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="mr-2" src="public/images/flags/us_flag.jpg" alt="Header Language" height="16">
                    English
                    <span class="mdi mdi-chevron-down"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="public/images/flags/germany_flag.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"> German </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="public/images/flags/italy_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> Italian </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="public/images/flags/french_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> French </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="public/images/flags/spain_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> Spanish </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="public/images/flags/russia_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> Russian </span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge badge-danger badge-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
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
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="public/images/users/user-4.jpg" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle mr-1"></i> My
                        Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings font-size-17 align-middle mr-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-settings-outline"></i>
                </button>
            </div>

        </div>
    </div>
</header>

<!-- sidebar -->
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="ti-home mr-2"></i>Dashboard
                        </a>
                    </li>

                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-package mr-2"></i>UI Elements
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu dropdown-menu-left dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-alerts.php" class="dropdown-item">Alerts</a>
                                        <a href="ui-buttons.php" class="dropdown-item">Buttons</a>
                                        <a href="ui-cards.php" class="dropdown-item">Cards</a>
                                        <a href="ui-carousel.php" class="dropdown-item">Carousel</a>
                                        <a href="ui-dropdowns.php" class="dropdown-item">Dropdowns</a>
                                        <a href="ui-grid.php" class="dropdown-item">Grid</a>
                                        <a href="ui-images.php" class="dropdown-item">Images</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-lightbox.php" class="dropdown-item">Lightbox</a>
                                        <a href="ui-modals.php" class="dropdown-item">Modals</a>
                                        <a href="ui-rangeslider.php" class="dropdown-item">Range Slider</a>
                                        <a href="ui-session-timeout.php" class="dropdown-item">Session Timeout</a>
                                        <a href="ui-progressbars.php" class="dropdown-item">Progress Bars</a>
                                        <a href="ui-sweet-alert.php" class="dropdown-item">Sweet-Alert</a>
                                        <a href="ui-tabs-accordions.php" class="dropdown-item">Tabs & Accordions</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-typography.php" class="dropdown-item">Typography</a>
                                        <a href="ui-video.php" class="dropdown-item">Video</a>
                                        <a href="ui-general.php" class="dropdown-item">General</a>
                                        <a href="ui-colors.php" class="dropdown-item">Colors</a>
                                        <a href="ui-rating.php" class="dropdown-item">Rating</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-harddrives mr-2"></i>Components
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Email <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox.php" class="dropdown-item">Inbox</a>
                                    <a href="email-read.php" class="dropdown-item">Email Read</a>
                                    <a href="email-compose.php" class="dropdown-item">Email Compose</a>
                                </div>
                            </div>

                            <a href="calendar.php" class="dropdown-item">Calendar</a>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Forms <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="form-elements.php" class="dropdown-item">Form Elements</a>
                                    <a href="form-validation.php" class="dropdown-item">Form Validation</a>
                                    <a href="form-advanced.php" class="dropdown-item">Form Advanced</a>
                                    <a href="form-editors.php" class="dropdown-item">Form Editors</a>
                                    <a href="form-uploads.php" class="dropdown-item">Form File Upload</a>
                                    <a href="form-xeditable.php" class="dropdown-item">Form Xeditable</a>
                                    <a href="form-repeater.php" class="dropdown-item">Form Repeater</a>
                                    <a href="form-wizard.php" class="dropdown-item">Form Wizard</a>
                                    <a href="form-mask.php" class="dropdown-item">Form Mask</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-chart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Charts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-chart">
                                    <a href="charts-morris.php" class="dropdown-item">Morris Chart</a>
                                    <a href="charts-chartist.php" class="dropdown-item">Chartist Chart</a>
                                    <a href="charts-chartjs.php" class="dropdown-item">Chartjs Chart</a>
                                    <a href="charts-flot.php" class="dropdown-item">Flot Chart</a>
                                    <a href="charts-knob.php" class="dropdown-item">Jquery Knob Chart</a>
                                    <a href="charts-sparkline.php" class="dropdown-item">Sparkline Chart</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tables <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic.php" class="dropdown-item">Basic Tables</a>
                                    <a href="tables-datatable.php" class="dropdown-item">Data Table</a>
                                    <a href="tables-responsive.php" class="dropdown-item">Responsive Table</a>
                                    <a href="tables-editable.php" class="dropdown-item">Editable Table</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Icons <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-material.php" class="dropdown-item">Material Design</a>
                                    <a href="icons-fontawesome.php" class="dropdown-item">Font Awesome</a>
                                    <a href="icons-ion.php" class="dropdown-item">Ion Icons</a>
                                    <a href="icons-themify.php" class="dropdown-item">Themify Icons</a>
                                    <a href="icons-dripicons.php" class="dropdown-item">Dripicons</a>
                                    <a href="icons-typicons.php" class="dropdown-item">Typicons Icons</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Maps <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google.php" class="dropdown-item"> Google Map</a>
                                    <a href="maps-vector.php" class="dropdown-item"> Vector Map</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-archive mr-2"></i> Authentication
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu dropdown-mega-menu-lg" aria-labelledby="topnav-auth">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <a href="pages-login.php" class="dropdown-item">Login 1</a>
                                        <a href="pages-register.php" class="dropdown-item">Register 1</a>
                                        <a href="pages-recoverpw.php" class="dropdown-item">Recover Password 1</a>
                                        <a href="pages-lock-screen.php" class="dropdown-item">Lock Screen 1</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <a href="pages-login-2.php" class="dropdown-item">Login 2</a>
                                        <a href="pages-register-2.php" class="dropdown-item">Register 2</a>
                                        <a href="pages-recoverpw-2.php" class="dropdown-item">Recover Password 2</a>
                                        <a href="pages-lock-screen-2.php" class="dropdown-item">Lock Screen 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-extrapages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-support mr-2"></i> Extra Pages
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg" aria-labelledby="topnav-extrapages">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <a href="pages-timeline.php" class="dropdown-item">Timeline</a>
                                        <a href="pages-invoice.php" class="dropdown-item">Invoice</a>
                                        <a href="pages-directory.php" class="dropdown-item">Directory</a>
                                        <a href="pages-blank.php" class="dropdown-item">Blank Page</a>
                                        <a href="pages-404.php" class="dropdown-item">Error 404</a>
                                        <a href="pages-500.php" class="dropdown-item">Error 500</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <a href="pages-pricing.php" class="dropdown-item">Pricing</a>
                                        <a href="pages-gallery.php" class="dropdown-item">Gallery</a>
                                        <a href="pages-maintenance.php" class="dropdown-item">Maintenance</a>
                                        <a href="pages-comingsoon.php" class="dropdown-item">Coming Soon</a>
                                        <a href="pages-faq.php" class="dropdown-item">Faq</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-emailtemplates" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-bookmark-alt mr-2"></i>Email Templates
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-emailtemplates">
                            <a href="email-template-basic.php" class="dropdown-item">Basic Action Email</a>
                            <a href="email-template-Alert.php" class="dropdown-item">Alert Email</a>
                            <a href="email-template-Billing.php" class="dropdown-item">Billing Email</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-layout mr-2"></i> Layouts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <a href="index.php" class="dropdown-item">Vertical</a>
                            <a href="layouts-topbar-light.php" class="dropdown-item">Topbar Light</a>
                            <a href="layouts-boxed-hor.php" class="dropdown-item">Boxed</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>