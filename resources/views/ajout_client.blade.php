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
    <link rel="stylesheet" href="{{ url('plugins/morris/morris.css')}}">
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/style.css')}}" rel="stylesheet" type="text/css">
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
                <div class="text-center"><a target="_self" href="{{ url('/') }}" class="logo"><img
                            src="images/logo_dark.png" height="20" alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li><a target="_self" href="{{ url('/') }}" class="waves-effect"><i class="dripicons-home"></i>
                                <span>Tableau de bord <span
                                        class="badge badge-success badge-pill float-right"></span></span></a></li>

                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Clients </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a target="_self" href="{{ url('/ajout_client') }}">Ajouter un client/prospect</a>
                                </li>
                                <li><a href="{{ url('/liste_clients') }}">Liste des Clients</a></li>

                            </ul>
                        </li>

                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Fournisseurs </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_fournisseur') }}">Ajouter un Fournisseur</a></li>
                                <li><a href="{{ url('/liste_fournisseurs') }}">Liste des Fournisseurs</a></li>
                            </ul>
                        </li>



                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Factures </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_factures') }}">Ajouter une facture</a></li>
                                <li><a href="{{ url('/liste_factures') }}">Liste des Factures</a></li>

                            </ul>
                        </li>


                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Devis</span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_devis') }}">Ajouter un Devis</a></li>
                                <li><a href="{{ url('/liste_devis') }}">Liste des devis</a></li>

                            </ul>
                        </li>

                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Bons de livraison </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_bl') }}">Ajouter un BL</a></li>
                                <li><a href="{{ url('/liste_bl') }}">Liste des BL</a></li>

                            </ul>
                        </li>

                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-document"></i> <span>Avoirs </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
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
                        <div class="text-center"><a target="_self" href="{{ url('/') }}" class="logo"><img
                                    src="images/logo.png" height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->

                        <ul class="list-inline float-right mb-0">


                            <li class="list-inline-item dropdown notification-list nav-user"><a target="_self"
                                    class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                                        src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span
                                        class="d-none d-md-inline-block ml-1">David M. Bailey <i
                                            class="mdi mdi-chevron-down"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a target="_self" class="dropdown-item" href="#"><i
                                            class="dripicons-user text-muted"></i> Profile</a>

                                    <div class="dropdown-divider"></div><a target="_self" class="dropdown-item"
                                        href="/"><i class="dripicons-exit text-muted"></i> Logout</a>
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
                                            <h4 class="page-title m-0">Ajout des Clients/Prospects</h4>
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
                                            <h4 class="mt-0 header-title">Fiche Client</h4>
                                            <p class="text-muted m-b-30">Ajouter un client ou un prospect</p>
                                            <form action="Client" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label>Statut</label>
                                                    <select class="custom-select" name="status">
                                                        <option selected="selected">Choisir un status</option>
                                                        @foreach ($statuses as $status)
                                                        <option value="{{ $status->status_id }}">{{ $status->libelle }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Civilité</label>
                                                    <select class="custom-select" name="civilite">
                                                        <option selected="selected">Choisir une civilité</option>
                                                        @foreach ($civilites as $civilite)
                                                        <option value="{{ $civilite->civilite_id }}">
                                                            {{ $civilite->libelle}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input">Raison sociale</label>
                                                    <input class="form-control" type="text" placeholder="Raison sociale"
                                                        id="example-text-input" name="raison_sociale">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input class="form-control" type="text" placeholder="Nom"
                                                        name="nom">
                                                </div>
                                                <div class="form-group">
                                                    <label>Prénom</label>
                                                    <input class="form-control" type="text" placeholder="prénom"
                                                        name="prenom">
                                                </div>
                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <input class="form-control" type="text" placeholder="Adresse"
                                                        name="adresse">
                                                </div>


                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-lg-6">
                                                        <label>Téléphone</label>
                                                        <input class="form-control" type="text" placeholder="telephone"
                                                            name="telephone">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Email</label>
                                                        <input class="form-control" type="text" placeholder="email"
                                                            name="email">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Code Postal</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Code postal" name="code_postal">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Ville</label>
                                                        <select class="custom-select" name="ville">
                                                            <option selected="selected">Choisir une Ville</option>
                                                            @foreach ($villes as $ville)
                                                            <option value="{{ $ville->ville_id }}">{{ $ville->nom}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>ICE</label>
                                                        <input class="form-control" type="text" placeholder="ICE"
                                                            name="ice">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>IF</label>
                                                        <input class="form-control" type="text" placeholder="IF"
                                                            name="if">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Patente</label>
                                                        <input class="form-control" type="text" placeholder="Patente"
                                                            name="patente">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>CNSS</label>
                                                        <input class="form-control" type="text" placeholder="CNSS"
                                                            name="cnss">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>RC</label>
                                                        <input class="form-control" type="text" placeholder="RC"
                                                            name="rc">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Siret</label>
                                                        <input class="form-control" type="text" placeholder="Siret"
                                                            name="siret">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Code APE</label>
                                                        <input class="form-control" type="text" placeholder="Code APE"
                                                            name="code_ape">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>TVA Intra.</label>
                                                        <input class="form-control" type="text" placeholder="TVA Intra"
                                                            name="tva_intra">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <h4 class="mt-0 header-title">Adresse de Livraison</h4>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label for="example-text-input">Raison sociale</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Raison sociale" id="example-text-input"
                                                            name="raison_sociale_adr_livraison">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Adresse 1</label>
                                                        <input class="form-control" type="text" placeholder="Adresse 1"
                                                            name="adresse_1_livraison">
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Adresse 2</label>
                                                        <input class="form-control" type="text" placeholder="Adresse 2"
                                                            name="adresse_2_livraison">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Code Postal</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Code postal" name="code_postal_adr_livraison">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">

                                                    <div class="col-lg-6">
                                                        <label>Pays</label>
                                                        <select class="custom-select" name="pays_adr_livraison">
                                                            <option selected="selected">Choisir un Pays</option>
                                                            @foreach ($payses as $pays)
                                                            <option value="{{ $pays->pays_id }}">{{ $pays->nom}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Ville</label>
                                                        <input class="form-control" type="text" placeholder="Ville"
                                                            name="ville_adr_livraison">
                                                    </div>


                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <h4 class="mt-0 header-title">Adresse Transporteur</h4>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Raison sociale</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Raison sociale"
                                                            name="raison_sociale_adr_transporteur">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Adresse 1</label>
                                                        <input class="form-control" type="text" placeholder="Adresse 1"
                                                            name="adresse_1_transporteur">
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Adresse 2</label>
                                                        <input class="form-control" type="text" placeholder="Adresse 2"
                                                            name="adresse_2_transporteur">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Code Postal</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Code postal"
                                                            name="code_postal_adr_transporteur">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Pays</label>
                                                        <select class="custom-select" name="pays_adr_transporteur">
                                                            <option selected="selected">Choisir un Pays</option>
                                                            @foreach ($payses as $pays)
                                                            <option value="{{ $pays->pays_id }}">{{ $pays->nom}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Ville</label>
                                                        <input class="form-control" type="text" placeholder="Ville"
                                                            name="ville_adr_transporteur">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <h4 class="mt-0 header-title">Rég/Tarifs/TVA</h4>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Mode de réglement par défaut</label>
                                                        <select class="custom-select" name="reglement">
                                                            <option selected="selected">Choisir un réglement</option>
                                                            @foreach ($reglements as $reglement)
                                                            <option value="{{ $reglement->mode_reglement_id }}">
                                                                {{ $reglement->libelle }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Tarif par défaut</label>
                                                        <select class="custom-select" name="tarif">
                                                            <option selected="selected">Choisir un tarif</option>
                                                            @foreach ($tarifs as $tarif)
                                                            <option value="{{ $tarif->tarif_id }}">{{ $tarif->libelle }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <h4 class="mt-0 header-title">Conditions de paiement</h4>
                                                </div>

                                                <div class="row" style="margin-bottom: 30px;">
                                                    <div class="col-lg-6">
                                                        <label>Condition de paiement Devis</label>
                                                        <select class="custom-select" name="condition_paiement">
                                                            <option selected="selected">Choisir une condition de
                                                                paiement Devis</option>
                                                            @foreach ($conditon_paiements as $conditon_paiement)
                                                            <option
                                                                value="{{ $conditon_paiement->conditon_paiement_id }}">
                                                                {{ $conditon_paiement->texte }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Condition de paiement Facture</label>
                                                        <select class="custom-select" name="condition_paiement_facture">
                                                            <option selected="selected">Choisir une condition de
                                                                paiement Facture</option>
                                                            @foreach ($conditon_paiements as $conditon_paiement)
                                                            <option
                                                                value="{{ $conditon_paiement->conditon_paiement_id }}">
                                                                {{ $conditon_paiement->texte }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
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
    <script src="{{ url('js/jquery.min.js')}}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('js/modernizr.min.js')}}"></script>
    <script src="{{ url('js/detect.js')}}"></script>
    <script src="{{ url('js/fastclick.js')}}"></script>
    <script src="{{ url('js/jquery.slimscroll.js')}}"></script>
    <script src="{{ url('js/jquery.blockUI.js')}}"></script>
    <script src="{{ url('js/waves.js')}}"></script>
    <script src="{{ url('js/jquery.nicescroll.js')}}"></script>
    <script src="{{ url('js/jquery.scrollTo.min.js')}}"></script>
    <!--Morris Chart-->
    <script src="{{ url('plugins/morris/morris.min.js')}}"></script>
    <script src="{{ url('plugins/raphael/raphael.min.js')}}"></script>
    <!-- dashboard js -->
    <script src="{{ url('pages/dashboard.int.js')}}"></script>
    <!-- App js -->
    <script src="{{ url('js/app.js')}}"></script>
</body>

</html>
