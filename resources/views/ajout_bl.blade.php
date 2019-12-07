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
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- morris css -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <style type="text/css">
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }

        .table-wrapper {
            width: 700px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }

        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }

        .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }

        .add-neww {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }



        .table-title .add-new i {
            margin-right: 4px;
        }

        table.table {
            table-layout: fixed;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table th:last-child {
            width: 100px;
        }

        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
        }

        table.table td a.add {
            color: #27C46B;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }

        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }

        table.table .form-control.error {
            border-color: #f50000;
        }

        table.table td .add {
            display: none;
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
        <div class="left side-menu"><button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="mdi mdi-close"></i></button>
            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center"><a target="_self" href="{{ url('/') }}" class="logo"><img src="images/logo_dark.png" height="20" alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                      <ul>
                        <li class="menu-title">Main</li>
                        <li><a target="_self" href="{{ url('/') }}" class="waves-effect"><i class="dripicons-home"></i> <span>Tableau de bord <span class="badge badge-success badge-pill float-right"></span></span></a></li>
                        
                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Clients </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_client') }}">Ajouter un client/prospect</a></li>
                                <li><a href="{{ url('/liste_clients') }}">Liste des Clients</a></li>

                            </ul>
                        </li>
                        
                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Fournisseurs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_fournisseur') }}">Ajouter un Fournisseur</a></li>
                                <li><a href="{{ url('/liste_fournisseurs') }}">Liste des Fournisseurs</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Factures </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_factures') }}">Ajouter une facture</a></li>
                                <li><a href="{{ url('/liste_factures') }}">Liste des Factures</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Devis</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/ajout_devis') }}">Ajouter un Devis</a></li>
                                <li><a href="{{ url('/liste_devis') }}">Liste des devis</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Bons de livraison </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a target="_self"  href="{{ url('/ajout_bl') }}">Ajouter un BL</a></li>
                                <li><a href="{{ url('/liste_bl') }}">Liste des BL</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i> <span>Avoirs </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
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
                        <div class="text-center"><a target="_self" href="{{ url('/') }}" class="logo"><img src="images/logo.png" height="22" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->

                        <ul class="list-inline float-right mb-0">


                            <li class="list-inline-item dropdown notification-list nav-user"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a target="_self" class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>

                                    <div class="dropdown-divider"></div><a target="_self" class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
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
                        <form action="#">
                            <div class="table-wrapper">
                                <div class="card m-b-10" style="width: 100%">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Choisir un Client</h4>

                                        <div class="form-group"><label>Nom Client</label> <select class="custom-select">
                                                <option selected="selected">Choisir un client</option>
                                                <option value="1">Client 1</option>
                                                <option value="2">Client 2</option>
                                            </select>
                                        </div>

                                        <div class="row" style="margin-bottom: 30px;">
                                            <div class="col-lg-6">
                                                <label>Etat</label>
                                                <input class="form-control" type="text" value="En Cours" disabled />
                                            </div>

                                            <div class="col-lg-6">
                                                <label>Numéro</label>
                                                <input class="form-control" type="text" value="D-2019-0004">
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 30px;">
                                            <div class="col-lg-6">
                                                <div class="form-group"><label>Date Livraison</label>
                                                    <div>
                                                        <div class="input-group"><input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                                        </div>
                                                        <!-- input-group -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group"><label>Date Fermeture</label>
                                                    <div>
                                                        <div class="input-group"><input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                                        </div>
                                                        <!-- input-group -->
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="row" style="margin-bottom: 30px;">
                                            <div class="col-lg-6">
                                                <div class="form-group"><label>Imprimé</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>zz</option>
                                                                <option>zz</option>
                                                            </select>
                                                            <div class="input-group-append bg-custom b-0"></div>
                                                        </div>

                                                        <div class="col">
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                        <!-- input-group -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group"><label>Envoi</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>zz</option>
                                                                <option>zz</option>
                                                            </select>
                                                            <div class="input-group-append bg-custom b-0"></div>
                                                        </div>
                                                        <div class="col">
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                        <!-- input-group -->
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                       
                                        <div class="row" style="margin-bottom: 30px;">
                                            
                                            <div class="col-lg-6">
                                                <div class="form-group"><label>Tarif du document</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>zz</option>
                                                                <option>zz</option>
                                                            </select>
                                                            <div class="input-group-append bg-custom b-0"></div>
                                                        </div>
                                                        <!-- input-group -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <label>Total HT</label>
                                                <input class="form-control" type="text" value="0.00 DH" />
                                            </div>


                                        </div>

                                        <div class="row" style="margin-bottom: 30px;">
                                            
                                            <div class="col-lg-6">
                                                <label>Remise Globale</label>
                                                <div class="col">
                                                    <input class="form-control" type="text" value="0.00%">
                                                </div>
                                                <div class="col">
                                                    <input class="form-control" type="text" value="0.00 DH">
                                                </div>

                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <label>Total HT après remise</label>
                                                <input class="form-control" type="text" value="0.00 DH" />
                                            </div>
                                            
                                            
                                        </div>
                                                                            
                                        
                                        <div class="row" style="margin-bottom: 30px;">
                                            <div class="col-lg-6">
                                                <label>Observations</label>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3"></textarea>
                                            </div>

                                            <div class="col-lg-6">
                                                <label>Annotations</label>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row" style="margin-bottom: 30px;">
                                            <div class="col-lg-6">
                                                <label>Acompte  </label>
                                                <input class="form-control" type="text" value="$$$" />
                                            </div>

                                            <div class="col-lg-6">
                                                <label>Net à payer </label>
                                                <input class="form-control" type="text" value="$$$">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>

                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2>Détails <b>Bon Livraison</b></h2>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Ajouter ligne</button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-info add-neww"><i class="fa fa-check"></i> Valider</button>
                                            </div>

                                        </div>
                                        <br>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Réf</th>
                                                    <th>Désignation</th>
                                                    <th>Qté</th>
                                                    <th>PU HT</th>
                                                    <th>%</th>
                                                    <th>Activité</th>
                                                    <th>Total HT</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Peter Parker</td>
                                                    <td>Customer Service</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>
                                                        <a target="_self" class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a target="_self" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a target="_self" class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Peter Parker</td>
                                                    <td>Customer Service</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>
                                                        <a target="_self" class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a target="_self" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a target="_self" class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Peter Parker</td>
                                                    <td>Customer Service</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>(313) 555-5735</td>
                                                    <td>
                                                        <a target="_self" class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a target="_self" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a target="_self" class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center>

                                        </center>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- container fluid -->
                    </div>
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->
            <footer class="footer">© 2020 Proxima <span class="d-none d-md-inline-block">All rights reserved</span></footer>
        </div>
        <!-- End Right content here -->
    </div>
    <!-- END wrapper -->

    <script type="text/javascript">
        $(document).ready(function() {


            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function() {
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            $(document).on("click", ".edit", function() {
                $(this).parents("tr").find("td:not(:last-child)").each(function() {
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
            });
            // Delete row on delete button click
            $(document).on("click", ".delete", function() {
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");


            });
        });
    </script>


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
    <!-- Plugins js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Plugins Init js -->
    <script src="pages/form-advanced.js"></script>
    <!-- App js -->
    

    <!-- jQuery  -->
    <!--<script src="js/jquery.min.js"></script>-->

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <!-- dashboard js -->
    <!-- App js -->
    <script src="js/app.js"></script>
</body>

</html>