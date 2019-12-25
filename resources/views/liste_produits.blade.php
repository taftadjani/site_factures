<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Listes des Produits - Proxima</title>
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
                <div class="text-center"><a href="index.html" class="logo"><img src="images/logo_dark.png" height="20" alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                      <ul>
                        <li class="menu-title">Main</li>
                        <li><a href="index.html" class="waves-effect"><i class="dripicons-home"></i> <span>Tableau de bord <span class="badge badge-success badge-pill float-right"></span></span></a></li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Clients </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_client.html">Ajouter un client/prospect</a></li>
                                <li><a href="liste_clients.html">Liste des Clients</a></li>

                            </ul>
                        </li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Fournisseurs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_fournisseur.html">Ajouter un Fournisseur</a></li>
                                <li><a href="liste_fournisseurs.html">Liste des Fournisseurs</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Factures </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_factures.html">Ajouter une facture</a></li>
                                <li><a href="liste_factures.html">Liste des Factures</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Devis</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_devis.html">Ajouter un Devis</a></li>
                                <li><a href="liste_devis.html">Liste des devis</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Bons de livraison </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_bl.html">Ajouter un BL</a></li>
                                <li><a href="liste_bl.html">Liste des BL</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Avoirs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_avoir.html">Ajouter un avoir</a></li>
                                <li><a href="liste_avoirs.html">Liste des avoirs</a></li>
                                
                            </ul>
                        </li>


                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Gestion des produits </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_produit') }}">Ajouter un Produit</a></li>
                                <li><a href="{{ url('/liste_produits') }}">Liste des Produits</a></li>
                                <li><a href="{{ url('/ajout_famille') }}">Ajouter une Famille</a></li>
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Gestion de stocks </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_stock') }}">Ajouter un stock</a></li>
                                <li><a href="{{ url('/liste_stock') }}">Liste des Stocks</a></li>
                                <li><a href="{{ url('/gest_commandes') }}">Gestion commande fournisseurs</a></li>
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
                        <div class="text-center"><a href="index.html" class="logo"><img src="images/logo.png" height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->

                        <ul class="list-inline float-right mb-0">


                            <li class="list-inline-item dropdown notification-list nav-user"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>

                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
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
                                    <h4 class="page-title m-0">Liste des Fournisseurs</h4>
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
                                            <th>ID</th>
                                            <th>Référence</th>
                                            <th>Désignation</th>
                                            <th>Quantité en stock</th>
                                            <th>Prix achat</th>
                                            <th>Prix vente</th>
                                            <th>Marge HT</th>
                                                    <th>Delete</th>
                                                    <th>Modifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        

                                        @foreach ($produits as $produit)
                                            <td>{{ $produit->produit_id}}</td>
                                            <td>{{$produit->reference}}</td>
                                            <td>{{$produit->designation}}</td>
                                            <td>{{$produit->quantite_stock}}</td>
                                            <td>{{$produit->prix_achat}}</td>
                                            <td>{{$produit->prix_vente}}</td>
                                            <td>{{$produit->marge_ht}}</td>
                                                    <td>

                                                        <a href="{{ url('delete_produit') }}/{{ $produit->produit_id }}" class="text-danger ">
                                                            <div class="text-center py-md-1 px-md-1 font-weight-bold font-italic">Delete
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                    <a href="{{ url('modify_produit') }}?id={{ $produit->produit_id }}" class="text-warning " target="_self">
                                                            <div class="text-center py-md-1 px-md-1 font-weight-bold font-italic">Modifier
                                                            </div>
                                                        </a>
                                                    </td>
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