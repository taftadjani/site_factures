<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Bon de Livraison finale</title>
    <meta content="Dashboard Proxima" name="description">
    <meta content="Proxima" name="author">
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
        <div class="left side-menu d-print-none"><button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="mdi mdi-close"></i></button>
            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center"><a  target="_self" href="{{ url('/') }}" class="logo"><img src="images/logo_dark.png" height="20" alt="logo"></a></div>
            </div>
           
        </div>
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <div class="topbar d-print-none">
                    <div class="topbar-left	d-none d-lg-block">
                        <div class="text-center"><a  target="_self"  href="{{ url('/') }}" class="logo"><img src="images/logo.png" height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar"><input class="search-input" type="search" placeholder="Search"> <a  target="_self"  href="#" class="close-search toggle-search" data-target="#search-wrap"><i class="mdi mdi-close-circle"></i></a></div>
                        </div>
                        <ul class="list-inline float-right mb-0">
                            
                <li class="list-inline-item dropdown notification-list nav-user"><a   target="_self" class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i></span></a>
                    <div
                        class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a   target="_self" class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>                  
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a></div>
            </li>
            </ul>
           <div class="clearfix"></div>
            </nav>
        </div>
        <!-- Top Bar End -->
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box d-print-none">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Bon de Livraison Proxima</h4>
                                </div>
                               
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end page-title-box -->
                    </div>
                </div>
                <!-- end page title -->

                <?php
                    $cl=DB::table('clients')
                    ->where('client_id', $client)
                    ->get();
                   $y=date('Y')
                   
                ?>
                @foreach($cl as $c)
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="invoice-title">
                                            <h4 class="float-right font-16"><strong>Bon de Livraison #{{$numero}}</strong></h4>
                                            <h3 class="m-t-0"><img src="images/logo_dark.png" alt="logo" height="28"></h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                        <div class="col-6"><address><strong>Client:</strong><br>{{$c->prenom}} {{$c->nom}}<br>{{$c->adresse}}<br>Tel<br>{{$c->telephone}}</address></div>
                                        
                                            <div class="col-6 text-right"><address><strong>Shipped To:</strong><br>Kenny Rigdon<br>1234 Main<br>Apt. 4B<br>Springfield, ST 54321</address></div>
                                        </div>
                                        <div class="row">
                                        <div class="col-6 m-t-30"><address><strong>Methode de Payement:</strong><br> {{$payement}}</address></div>
                                            <div class="col-6 m-t-30 text-right"><address><strong>Order Date:</strong><br>{{$y}}<br><br></address></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel panel-default">
                                            <div class="p-2">
                                                <h3 class="panel-title font-20"><strong>Récapitulatif Bon de Livraison</strong></h3>
                                            </div>
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <td><strong>Réf</strong></td>
                                                                <td class="text-center"><strong>Désignation</strong></td>
                                                                <td class="text-center"><strong>Qté</strong></td>
                                                                
                                                                <td class="text-center"><strong>PU HT</strong></td>
                                                                <td class="text-center"><strong>%</strong></td>
                                                                <td class="text-center"><strong>Activité</strong></td>
                                                                
                                                                
                                                                <td class="text-center"><strong>Total HT(DH)</strong></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                           $total=0;
                                                        ?>
                                                        @foreach($produits_fact as $p)
                                                          <?php
                                                                $idp=$p->produit_id;
                                                                $produit=DB::table('produits')
                                                                ->where('produit_id', $idp)
                                                                ->get();

                                                                
                                                            ?> 
                                                            
                                                             
                                                            @foreach($produit as $pr)
                                                            <tr>
                                                                <td class="text-center">{{$pr->reference}}</td>
                                                                <td class="text-center">{{$pr->designation}}</td>
                                                                <td class="text-center">{{$p->quantite}}</td>
                                                                <td class="text-center">{{$pr->prix_vente}}</td>
                                                                <td class="text-center">{{$p->remise}}</td>
                                                                <td class="text-center">{{$p->activite}}</td>
                                                                <?php
                                                                   $t=$p->quantite*$pr->prix_vente;
                                                                   $tr=$t-(($t*$p->remise)/100);
                                                                ?>
                                                                <td class="text-center">{{$tr}}</td>
                                                            </tr>
                                                            <?php 

                                                               $total=$total+$tr;
                                                             ?>
                                                            @endforeach
                                                            @endforeach
                                                           <?php 
                                                              $tar=$total-(($total*$remise/100));
                                                              $rem=($total*$remise/100);
                                                           ?>
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center"><strong>Total Ht</strong></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">{{$total}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center"><strong>Remise(%)</strong></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">{{$remise}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center"><strong>Remise(Dh)</strong></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">{{$rem}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center"><strong>Total HT Après Remise</strong></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">{{$tar}}</td>
                                                            </tr>
                                                           
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="d-print-none mo-mt-2">
                                                    <div class="float-right"><a   target="_self" href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i>&nbsp;&nbsp;Imprimer</a> <a   target="_self" href="#" class="btn btn-primary waves-effect waves-light">Envoyer par mail</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            @endforeach
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
    <!-- App js -->
    <script src="js/app.js"></script>
</body>

</html>