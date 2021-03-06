<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    {{-- <title>Gestion des Devis-Factures</title> --}}
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">


    <link href="plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css" rel="stylesheet">

    <style>
        .imagePreview {
            width: 100%;
            height: 180px;
            background-position: center center;
            background: url(http://cliquecities.com/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
            background-color: #fff;
            background-size: cover;
            background-repeat: no-repeat;
            display: inline-block;
            box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            display: block;
            border-radius: 0px;
            box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
            margin-top: -5px;
        }

        .imgUp {
            margin-bottom: 15px;
        }

        .del {
            position: absolute;
            top: 0px;
            right: 15px;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            background-color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
        }

        .imgAdd {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #4bd7ef;
            color: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
            text-align: center;
            line-height: 30px;
            margin-top: 0px;
            cursor: pointer;
            font-size: 15px;
        }
    </style>



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
        <div class="left side-menu"><button type="button"
                class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i
                    class="mdi mdi-close"></i></button>
            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center"><a href="index.html" class="logo"><img src="images/logo_dark.png" height="20"
                            alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li><a href="index.html" class="waves-effect"><i class="dripicons-home"></i> <span>Tableau de
                                    bord <span class="badge badge-success badge-pill float-right"></span></span></a>
                        </li>

                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Clients </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_client.html">Ajouter un client/prospect</a></li>
                                <li><a href="liste_clients.html">Liste des Clients</a></li>

                            </ul>
                        </li>

                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Fournisseurs </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_fournisseur.html">Ajouter un Fournisseur</a></li>
                                <li><a href="liste_fournisseurs.html">Liste des Fournisseurs</a></li>
                            </ul>
                        </li>



                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Factures </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_factures.html">Ajouter une facture</a></li>
                                <li><a href="liste_factures.html">Liste des Factures</a></li>

                            </ul>
                        </li>


                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Devis</span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_devis.html">Ajouter un Devis</a></li>
                                <li><a href="liste_devis.html">Liste des devis</a></li>

                            </ul>
                        </li>

                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Bons de livraison </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_bl.html">Ajouter un BL</a></li>
                                <li><a href="liste_bl.html">Liste des BL</a></li>

                            </ul>
                        </li>

                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Avoirs </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ajout_avoir.html">Ajouter un avoir</a></li>
                                <li><a href="liste_avoirs.html">Liste des avoirs</a></li>

                            </ul>
                        </li>

                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Gestion des produits </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
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
                        <div class="text-center"><a href="index.html" class="logo"><img src="images/logo.png"
                                    height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->

                        <ul class="list-inline float-right mb-0">


                            <li class="list-inline-item dropdown notification-list nav-user"><a
                                    class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                                        src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span
                                        class="d-none d-md-inline-block ml-1">David M. Bailey <i
                                            class="mdi mdi-chevron-down"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i>
                                        Profile</a>

                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                            class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item"><button type="button"
                                    class="button-menu-mobile open-left waves-effect"><i
                                        class="mdi mdi-menu"></i></button></li>

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
                                            <h4 class="page-title m-0">Ajout des Produits</h4>
                                        </div>

                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end page-title-box -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4" style="width: 100px;"></div>
                            <div class="col-9">
                                <div class="container-fluid">
                                    <div class="card m-b-10" style="width: 100%">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Fiche Produit</h4>
                                            <p class="text-muted m-b-30">Ajouter un Produit</p>
                                            <form action="{{ route('Produit.store')}}" method="POST">
                                                 {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label>Désignation</label>
                                                    <textarea id="textarea" class="form-control" name="designation" maxlength="225" placeholder="Désignation"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Référence produit</label>
                                                        <input class="form-control" type="text" placeholder="Référence produit" name="reference_produit"
                                                            id="example-text-input" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Quantité en stock</label>
                                                        <input class="form-control" type="number" name="quantite" placeholder="Quantité en stock(0 default)"
                                                            id="example-text-input">
                                                    </div>
                                                </div>


                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-lg-6">
                                                        <label>Famille</label>
                                                        <select class="custom-select" name="famille">
                                                            <option selected="selected" value="-1">Choisir une famille</option>
                                                            @foreach ($familles as $famille)
                                                            <option value="{{ $famille->famille_id }}">{{ $famille->libelle }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Fournisseur</label>
                                                        <select class="custom-select" name="fournisseur">
                                                            <option selected="selected"  value="-1">Choisir un fournisseur</option>
                                                            @foreach ($fournisseurs as $fournisseur)
                                                            <option value="{{ $fournisseur->fournisseur_id }}">{{ $fournisseur->nom }} {{ $fournisseur->prenom }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Activité</label>
                                                        <select class="custom-select" name="activite">
                                                            <option selected="selected"  value="noActivity" >Choisir une Activité</option>
                                                            <option value="Marchandise">Marchandise</option>
                                                            <option value="Service">Service</option>
                                                        </select>
                                                    </div>
                                                     <div class="col-lg-6">
                                                        <label>Unité</label>
                                                        <select class="custom-select" name="unite">
                                                            <option selected="selected"  value="-1">Choisir l'unité</option>
                                                            @foreach ($unites as $unite)
                                                            <option value="{{ $unite->unite_id }}">{{ $unite->libelle }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                


                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Prix D'achat</label>
                                                        <input class="form-control" type="number" name="prix_achat" placeholder="Prix D'achat" required>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Prix Vente</label>
                                                        <input class="form-control" type="number" placeholder="Prix Vente" name="prix_vente" required>
                                                    </div>
                                                   
                                                </div>
                                                <div class="row" style="margin-bottom: 30px;">
                                                   

                                                    <div class="col-lg-6">
                                                        <label>Taxe</label>
                                                        <select class="custom-select" name="taxe">
                                                            <option selected="selected"  value="-1">Choisir le taxe par defaut
                                                            </option>
                                                            @foreach ($taxes as $taxe)
                                                            <option value="{{ $taxe->taxe_id }}">{{ $taxe->libelle }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                     <div class="col-lg-6">
                                                        <label>Marge HT </label>
                                                        <input class="form-control" type="number" placeholder="Marge HT" name="marge_ht">
                                                    </div>
                                                </div>




                                                {{-- 


                                                <div class="form-group"><label>Note</label> <textarea id="textarea"
                                                        class="form-control"></textarea></div> --}}

                                                <div class="form-group"><label>Photo du produit</label>
                                                    <div class="row">
                                                        <div class="col-sm-2 imgUp">
                                                            <div class="imagePreview"></div>
                                                            <label class="btn btn-primary">
                                                                Télécharger<input type="file" class="uploadFile img"
                                                                    value="Upload Photo" name="images"
                                                                    style="width: 0px;height: 0px;overflow: hidden;">
                                                            </label>
                                                        </div><!-- col-2 -->
                                                        {{-- <i class="fa fa-plus imgAdd"></i> --}}
                                                    </div><!-- row -->
                                                </div>


                                                <div class="row" style="margin-bottom: 30px;">
                                                    {{-- <div class="col-lg-6">
                                                        <label>Marge totale en % :</label>
                                                        <input class="form-control" type="text" value="">
                                                    </div> --}}

                                                </div>

                                                <center>
                                                    <button type="submit"
                                                        class="btn btn-outline-success waves-effect waves-light">Valider&nbsp;&nbsp;&nbsp;&nbsp;<i
                                                            class="mdi mdi-account-check-outline"></i></button>
                                                </center>


                                            </form>
                                        </div>
                                    </div>

                                </div>

                                <!-- end col -->

                                <!-- end col -->
                            </div>
                            <div class="col-lg-4" style="width: 100px;"></div>
                        </div>
                    </div>
                    <!-- container fluid -->
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->
            <footer class="footer">© 2020 Proxima <span class="d-none d-md-inline-block">All rights reserved</span>
            </footer>
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




    <!-- dashboard js -->
    <script src="pages/dashboard.int.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>



    <script>
        $(document).ready(function() {
            $(".custom-select").select2();
        });
    </script>
    <!-- App js -->
    <script src="js/app.js"></script>
    <script>
        $(".imgAdd").click(function() {
            $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Télécharger<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
        });
        $(document).on("click", "i.del", function() {
            $(this).parent().remove();
        });
        $(function() {
            $(document).on("change", ".uploadFile", function() {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function() { // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+ this.result + ")");
                    }
                }

            });
        });
    </script>


</body>

</html>