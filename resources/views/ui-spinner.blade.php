<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu"><button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="mdi mdi-close"></i></button>
            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center"><a  target="_self"  href="{{ url('/') }}" class="logo"><img src="images/logo_dark.png" height="20" alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li><a  target="_self"  href="{{ url('/') }}" class="waves-effect"><i class="dripicons-home"></i> <span>Dashboard <span class="badge badge-success badge-pill float-right">3</span></span></a></li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Elements </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="ui-alerts.html">Alerts</a></li>
                                <li><a  target="_self"  href="ui-badge.html">Badge</a></li>
                                <li><a  target="_self"  href="ui-buttons.html">Buttons</a></li>
                                <li><a  target="_self"  href="ui-cards.html">Cards</a></li>
                                <li><a  target="_self"  href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a  target="_self"  href="ui-navs.html">Navs</a></li>
                                <li><a  target="_self"  href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a  target="_self"  href="ui-modals.html">Modals</a></li>
                                <li><a  target="_self"  href="ui-images.html">Images</a></li>
                                <li><a  target="_self"  href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a  target="_self"  href="ui-pagination.html">Pagination</a></li>
                                <li><a  target="_self"  href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                <li><a  target="_self"  href="ui-spinner.html">Spinner</a></li>
                                <li><a  target="_self"  href="ui-carousel.html">Carousel</a></li>
                                <li><a  target="_self"  href="ui-video.html">Video</a></li>
                                <li><a  target="_self"  href="ui-typography.html">Typography</a></li>
                                <li><a  target="_self"  href="ui-grid.html">Grid</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span>Advanced UI </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="advanced-alertify.html">Alertify</a></li>
                                <li><a  target="_self"  href="advanced-rating.html">Rating</a></li>
                                <li><a  target="_self"  href="advanced-nestable.html">Nestable</a></li>
                                <li><a  target="_self"  href="advanced-rangeslider.html">Range Slider</a></li>
                                <li><a  target="_self"  href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                <li><a  target="_self"  href="advanced-lightbox.html">Lightbox</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span>Icons </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="icons-material.html">Material Design</a></li>
                                <li><a  target="_self"  href="icons-ion.html">Ion Icons</a></li>
                                <li><a  target="_self"  href="icons-fontawesome.html">Font Awesome</a></li>
                                <li><a  target="_self"  href="icons-themify.html">Themify Icons</a></li>
                                <li><a  target="_self"  href="icons-dripicons.html">Dripicons</a></li>
                                <li><a  target="_self"  href="icons-typicons.html">Typicons Icons</a></li>
                            </ul>
                        </li>
                        <li><a  target="_self"  href="calendar.html" class="waves-effect"><i class="dripicons-calendar"></i><span> Calendar</span></a></li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms </span><span class="badge badge-warning badge-pill float-right">8</span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="form-elements.html">Form Elements</a></li>
                                <li><a  target="_self"  href="form-validation.html">Form Validation</a></li>
                                <li><a  target="_self"  href="form-advanced.html">Form Advanced</a></li>
                                <li><a  target="_self"  href="form-editors.html">Form Editors</a></li>
                                <li><a  target="_self"  href="form-uploads.html">Form File Upload</a></li>
                                <li><a  target="_self"  href="form-mask.html">Form Mask</a></li>
                                <li><a  target="_self"  href="form-summernote.html">Summernote</a></li>
                                <li><a  target="_self"  href="form-xeditable.html">Form Xeditable</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> Charts </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="charts-morris.html">Morris Chart</a></li>
                                <li><a  target="_self"  href="charts-chartist.html">Chartist Chart</a></li>
                                <li><a  target="_self"  href="charts-chartjs.html">Chartjs Chart</a></li>
                                <li><a  target="_self"  href="charts-flot.html">Flot Chart</a></li>
                                <li><a  target="_self"  href="charts-c3.html">C3 Chart</a></li>
                                <li><a  target="_self"  href="charts-other.html">Jquery Knob Chart</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Tables </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="tables-basic.html">Basic Tables</a></li>
                                <li><a  target="_self"  href="tables-datatable.html">Data Table</a></li>
                                <li><a  target="_self"  href="tables-responsive.html">Responsive Table</a></li>
                                <li><a  target="_self"  href="tables-editable.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Extra</li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Maps </span><span class="badge badge-danger badge-pill float-right">2</span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="maps-google.html">Google Map</a></li>
                                <li><a  target="_self"  href="maps-vector.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> Pages </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="pages-blank.html">Blank Page</a></li>
                                <li><a  target="_self"  href="pages-login.html">Login</a></li>
                                <li><a  target="_self"  href="pages-register.html">Register</a></li>
                                <li><a  target="_self"  href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a  target="_self"  href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a  target="_self"  href="pages-404.html">Error 404</a></li>
                                <li><a  target="_self"  href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-medical"></i><span> Extras </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a  target="_self"  href="extras-pricing.html">Pricing</a></li>
                                <li><a  target="_self"  href="extras-invoice.html">Invoice</a></li>
                                <li><a  target="_self"  href="extras-timeline.html">Timeline</a></li>
                                <li><a  target="_self"  href="extras-faqs.html">FAQs</a></li>
                                <li><a  target="_self"  href="extras-maintenance.html">Maintenance</a></li>
                                <li><a  target="_self"  href="extras-comingsoon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <div class="topbar">
                    <div class="topbar-left	d-none d-lg-block">
                        <div class="text-center"><a  target="_self"  href="{{ url('/') }}" class="logo"><img src="images/logo.png" height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar"><input class="search-input" type="search" placeholder="Search"> <a  target="_self"  href="#" class="close-search toggle-search" data-target="#search-wrap"><i class="mdi mdi-close-circle"></i></a></div>
                        </div>
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list"><a  target="_self"  class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap"><i class="mdi mdi-magnify noti-icon"></i></a></li>
                            <li class="list-inline-item dropdown notification-list"><a  target="_self"  class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-bell-outline noti-icon"></i> <span class="badge badge-danger badge-pill noti-icon-badge">3</span></a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Notification (3)</h5>
                                    </div>
                                    <div class="slimscroll-noti">
                                        <!-- item-->
                                        <a  target="_self"  href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>
                                        <!-- item-->
                                        <a  target="_self"  href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>
                                        <!-- item-->
                                        <a  target="_self"  href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                        </a>
                                        <!-- item-->
                                        <a  target="_self"  href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>
                                        <!-- item-->
                                        <a  target="_self"  href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>
                                    </div>
                                    <!-- All--><a  target="_self"  href="javascript:void(0);" class="dropdown-item notify-all">View All</a></div>
                </li>
                <li class="list-inline-item dropdown notification-list nav-user"><a  target="_self"  class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i></span></a>
                    <div
                        class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a  target="_self"  class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a> <a  target="_self"  class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a> <a  target="_self"  class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>                        <a  target="_self"  class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                        <div class="dropdown-divider"></div><a  target="_self"  class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a></div>
            </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="list-inline-item"><button type="button" class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
                <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block"><a  target="_self"  class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">Create New <i class="mdi mdi-plus"></i></a>
                    <div class="dropdown-menu dropdown-menu-animated"><a  target="_self"  class="dropdown-item" href="#">Action</a> <a  target="_self"  class="dropdown-item" href="#">Another action</a> <a  target="_self"  class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div><a  target="_self"  class="dropdown-item" href="#">Separated link</a></div>
                </li>
                <li class="list-inline-item notification-list d-none d-sm-inline-block"><a  target="_self"  href="#" class="nav-link waves-effect">Activity</a></li>
            </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Spinners</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-settings mr-1"></i> Settings</button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated"><a  target="_self"  class="dropdown-item" href="#">Action</a> <a  target="_self"  class="dropdown-item" href="#">Another action</a> <a  target="_self"  class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div><a  target="_self"  class="dropdown-item" href="#">Separated link</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end page-title-box -->
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Border spinner</h4>
                                <p class="text-muted m-b-20">Use the border spinners for a lightweight loading indicator.</p>
                                <div class="bs-spinner">
                                    <div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-border text-secondary" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-border text-success" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-border text-danger" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-border text-warning" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-border text-info" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-border text-pink" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-border text-purple" role="status"><span class="sr-only">Loading...</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Growing spinner</h4>
                                <p class="text-muted m-b-20">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
                                <div class="bs-spinner">
                                    <div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-grow text-secondary" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-grow text-danger" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-grow text-warning" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-grow text-info" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-grow text-pink" role="status"><span class="sr-only">Loading...</span></div>
                                    <div class="spinner-grow text-purple" role="status"><span class="sr-only">Loading...</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Buttons</h4>
                                <p class="text-muted m-b-20">Use spinners within buttons to indicate an action is currently processing or taking place.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="button-items"><button class="btn btn-primary" type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button> <button class="btn btn-secondary"
                                                type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button> <button class="btn btn-success" type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button>                                            <button class="btn btn-danger" type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button></div>
                                        <div class="button-items"><button class="btn btn-primary" type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...</button> <button class="btn btn-secondary" type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...</button>                                            <button class="btn btn-success" type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...</button> <button class="btn btn-danger" type="button"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...</button></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="button-items"><button class="btn btn-purple" type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button> <button class="btn btn-pink" type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button>                                            <button class="btn btn-warning" type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button> <button class="btn btn-info"
                                                type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span></button></div>
                                        <div class="button-items"><button class="btn btn-purple" type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...</button> <button class="btn btn-pink" type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...</button>                                            <button class="btn btn-warning" type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...</button> <button class="btn btn-info" type="button"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...</button></div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container fluid -->
        </div>
        <!-- Page content Wrapper -->
    </div>
    <!-- content -->
    <footer class="footer">© 2019 Zinzer <span class="d-none d-md-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span></footer>
    </div>
    <!-- End Right content here -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/detect.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.blockUI.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <!-- App js -->
    <script src="js/app.js"></script>
</body>

</html>