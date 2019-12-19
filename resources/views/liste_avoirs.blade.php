<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Listes des Clients - Proxima</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- DataTables -->
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
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
                <div class="text-center"><a href="{{ url('/') }}" class="logo"><img src="images/logo_dark.png" height="20" alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                      <ul>
                        <li class="menu-title">Main</li>
                        <li><a href="{{ url('/') }}" class="waves-effect"><i class="dripicons-home"></i> <span>Tableau de bord <span class="badge badge-success badge-pill float-right"></span></span></a></li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Clients </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_client') }}">Ajouter un client/prospect</a></li>
                                <li><a href="{{ url('/liste_clients') }}">Liste des Clients</a></li>

                            </ul>
                        </li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Fournisseurs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_fournisseur') }}">Ajouter un Fournisseur</a></li>
                                <li><a href="{{ url('/liste_fournisseurs') }}">Liste des Fournisseurs</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Factures </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_factures') }}">Ajouter une facture</a></li>
                                <li><a href="{{ url('/liste_factures') }}">Liste des Factures</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Devis</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_devis') }}">Ajouter un Devis</a></li>
                                <li><a href="{{ url('/liste_devis') }}">Liste des devis</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Bons de livraison </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_bl') }}">Ajouter un BL</a></li>
                                <li><a href="{{ url('/liste_bl') }}">Liste des BL</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Avoirs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
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
                        <div class="text-center"><a href="{{ url('/') }}" class="logo"><img src="images/logo.png" height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->

                        <ul class="list-inline float-right mb-0">


                            <li class="list-inline-item dropdown notification-list nav-user"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>

                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="/"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
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
                                    <h4 class="page-title m-0">Liste des Avoirs</h4>
                                </div>
                             
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end page-title-box -->
                    </div>
                </div>
                <!-- end page title -->
              
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>client</th>
                                            <th>date Création</th>
                                           
                                            <th>Remboursement</th>
                                            <th>Remise globale </th>
                                            <th>Impression</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($factures as $fact)
                                    <?php
                                         $idp=$fact->client_id;
                                         $client=DB::table('clients')
                                         ->where('client_id', $idp)
                                         ->get();
                                    ?>
                                    @foreach($client as $c)
                                        <tr>
                                            <td>{{$fact->numero}}</td>
                                            <td>{{$c->prenom}} {{$c->nom}}</td>
                                            <td>{{$fact->date_creation}}</td>
                                            
                                            <td>{{$fact->remboursement}}</td>
                                            <td>{{$fact->remise_globale}}</td>
                                            <td>
                                            <div class="table-data-feature" style="justify-content: flex-start">
                                
                                                <a class="item" data-toggle="tooltip" data-placement="top" id="{{$fact->avoir_id}}" name="factid" href='/extrasAvoir?idFacture={{$fact->avoir_id}}&&idClient={{$c->client_id}}' class="btn btn-xs btn-info pull-right">
                                        
                                            <i class="fas fa-pencil-alt"></i>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
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
    <!-- Required datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plugins/datatables/jszip.min.js"></script>
    <script src="plugins/datatables/pdfmake.min.js"></script>
    <script src="plugins/datatables/vfs_fonts.js"></script>
    <script src="plugins/datatables/buttons.html5.min.js"></script>
    <script src="plugins/datatables/buttons.print.min.js"></script>
    <script src="plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="js/app.js"></script>
</body>

</html>