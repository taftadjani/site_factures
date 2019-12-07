<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Gestion des Devis-Factures</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- morris css -->
    <base href="{{ URL::asset('/') }}" target="_blank">
    <link rel="shortcut icon" href="{{ url('images/favicon.ico')}}">
    <link rel="stylesheet" href="{{ url('/morris/morris.css')}}">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css">
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
                <div class="text-center"><a target="_self"   href="{{ url('/') }}" class="logo"><img src="images/logo_dark.png" height="20" alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                      <ul>
                        <li class="menu-title">Main</li>
                        <li><a  target="_self"  href="{{ url('/') }}" class="waves-effect"><i class="dripicons-home"></i> <span>Tableau de bord <span class="badge badge-success badge-pill float-right"></span></span></a></li>
                        
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Clients </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_client') }}">Ajouter un client/prospect</a></li>
                                <li><a href="{{ url('/liste_clients') }}">Liste des Clients</a></li>

                            </ul>
                        </li>
                        
                        <li class="has_sub"><a target="_self"   href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Fournisseurs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_fournisseur') }}">Ajouter un Fournisseur</a></li>
                                <li><a href="{{ url('/liste_fournisseurs') }}">Liste des Fournisseurs</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Factures </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_factures') }}">Ajouter une facture</a></li>
                                <li><a href="{{ url('/liste_factures') }}">Liste des Factures</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Devis</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_devis') }}">Ajouter un Devis</a></li>
                                <li><a href="{{ url('/liste_devis') }}">Liste des devis</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Bons de livraison </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_bl') }}">Ajouter un BL</a></li>
                                <li><a href="{{ url('/liste_bl') }}">Liste des BL</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a  target="_self"  href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Avoirs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_avoir') }}">Ajouter un avoir</a></li>
                                <li><a href="{{ url('/liste_avoirs') }}">Liste des avoirs</a></li>
                                
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
                        <div class="text-center"><a target="_self"   href="{{ url('/') }}" class="logo" target="_self"><img src="images/logo.png" height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->
                        
                        <ul class="list-inline float-right mb-0">
                            
                            
                <li class="list-inline-item dropdown notification-list nav-user"><a target="_self"   class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i></span></a>
                    <div
                        class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a  target="_self"  class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>  
                        
                        <div class="dropdown-divider"></div><a  target="_self"  class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a></div>
            </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="list-inline-item"><button type="button" class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
               
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
                                    <h4 class="page-title m-0">Tableau de bord</h4>
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
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                                    <h4 class="mb-3 mt-0 float-right">1,587</h4>
                                </div>
                                <div><span class="badge badge-light text-info">+11% </span><span class="ml-2">From previous period</span></div>
                            </div>
                            <div class="p-3">
                                <div class="float-right"><a  target="_self"  href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a></div>
                                <p class="font-14 m-0">Last : 1447</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Revenue</h6>
                                    <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                                </div>
                                <div><span class="badge badge-light text-danger">-29% </span><span class="ml-2">From previous period</span></div>
                            </div>
                            <div class="p-3">
                                <div class="float-right"><a  target="_self"  href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a></div>
                                <p class="font-14 m-0">Last : $47,596</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-pink mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Average Price</h6>
                                    <h4 class="mb-3 mt-0 float-right">15.9</h4>
                                </div>
                                <div><span class="badge badge-light text-primary">0% </span><span class="ml-2">From previous period</span></div>
                            </div>
                            <div class="p-3">
                                <div class="float-right"><a  target="_self"  href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a></div>
                                <p class="font-14 m-0">Last : 15.8</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Product Sold</h6>
                                    <h4 class="mb-3 mt-0 float-right">1890</h4>
                                </div>
                                <div><span class="badge badge-light text-info">+89% </span><span class="ml-2">From previous period</span></div>
                            </div>
                            <div class="p-3">
                                <div class="float-right"><a  target="_self"  href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a></div>
                                <p class="font-14 m-0">Last : 1776</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Derniers documents utilisés :</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">#14567</th>
                                                <td>Michael Mitchell</td>
                                                <td>14 Jan</td>
                                                <td>$74</td>
                                                <td>2</td>
                                                <td>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>$148</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#14568</th>
                                                <td>Dennis Cervantes</td>
                                                <td>15 Jan</td>
                                                <td>$72</td>
                                                <td>2</td>
                                                <td>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>$144</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#14569</th>
                                                <td>Bernard Moats</td>
                                                <td>16 Jan</td>
                                                <td>$86</td>
                                                <td>1</td>
                                                <td>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>$86</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#14570</th>
                                                <td>Patrick Esquivel</td>
                                                <td>17 Jan</td>
                                                <td>$59</td>
                                                <td>2</td>
                                                <td>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>$118</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#14571</th>
                                                <td>Michael Barger</td>
                                                <td>18 Jan</td>
                                                <td>$62</td>
                                                <td>2</td>
                                                <td>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>$124</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <!-- end row -->
                
                <!-- end row -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Chiffres d'affaires HT/TTC - Règlements</h4>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div id="morris-line-example" class="morris-chart" style="height: 300px"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <h5 class="font-14 mb-5">Yearly Sales Report</h5>
                                            <div>
                                                <h5 class="mb-3">2018 : $19523</h5>
                                                <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis atque quos dolores et</p><a  target="_self"  href="#" class="btn btn-primary btn-sm">Read more <i class="mdi mdi-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <!-- end row -->
                <!-- end row -->
                
            </div>
            <!-- container fluid -->
        </div>
        <!-- Page content Wrapper -->
    </div>
    <!-- content -->
    <footer class="footer">© 2020 Proxima <span class="d-none d-md-inline-block">All rights reserved</span></footer>
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
    <!--Morris Chart-->
    <script src="morris/morris.min.js"></script>
    <script src="raphael/raphael.min.js"></script>
    <!-- dashboard js -->
    <script src="pages/dashboard.int.js"></script>
    <!-- App js -->
    <script src="js/app.js"></script>
</body>

</html>