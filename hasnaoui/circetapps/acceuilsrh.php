<?php

session_start();
include "configs.php";

if(isset($_GET['id']));




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CIRCET Morocco</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand  d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon text-dark">
                    <i class="fas fa-home"></i>
                </div>
       
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" >
                    <i class="fas fa-rocket"></i>
                    <span>Espace Pro</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php
                include"sidebar_srh.php";

            ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">


                        <i class="fa fa-bars"></i>
                    </button>
                    <img src="img/Circetmorocco2.jpg" height="130%" alt="">
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in "
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/khalid hasnaoui.jpg/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/khalid hasnaoui.jpg/60x60"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/khalid hasnaoui.jpg/60x60"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/khalid hasnaoui.jpg/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                                    <?php echo $_SESSION['pseudo']; ?>
                                </span>
                                <img class="img-profile rounded-circle" type="file" name="avatar"
                                    src="<?php echo "http://localhost/ProjetCircet/circetapps/img/$photo" ;?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="http://localhost/ProjetCircet/deconnexion.php" name="deconnexion"
                                    data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Deconnexion
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur votre espace professionnel !</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="container">
                        <div class="row my-2">
                            <div class="col-lg-8 order-lg-2">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="" data-target="#profile" data-toggle="tab"
                                            class="nav-link active">Profile</a>
                                    </li>
                                    <li class="nav-item">

                                    </li>
                                    <li class="nav-item">
                                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                                    </li>
                                </ul>
                                <div class="tab-content py-4">
                                    <div class="tab-pane active" id="profile">
                                        <h4 class="fas fa-user"> Mon profile</h4>
                                        <br> </br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p> <?php echo  $_SESSION['prenom']," " , $_SESSION['nom']; ?></p>
                                                <p>Age :  <?php echo $diff->format('%y') ?></p>
                                                <p>CIN :  <?php echo $_SESSION['cin']; ?> </p>
                                                <p>CNSS : <?php echo $_SESSION['codeCnss']; ?></p> 
                                                <p>Tél :  <?php echo $_SESSION['tel']; ?></p>
                                                <p>Service : <?php echo replaceSpecialChar($_SESSION['service']) ?></p>
                                                <p>Fonction :  <?php echo replaceSpecialChar($_SESSION['fonction']) ?></p>
                                                <p> Date d'embauche : <?php echo date('d-m-Y', strtotime($_SESSION['dateEmbauche']) )?></p>
                                                <p>Adresse actuelle : <?php echo ' '.replaceSpecialChar($_SESSION['adresse']) ; ?></p>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                            <div class="col-md-12">
                                                <!--/row<h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>-->
                                                <table class="table table-sm table-hover table-striped">
                                                    <!--/row <tbody>
                                            <tr>
                                                <td>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                            </tr>
                                        </tbody>-->
                                                </table>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <div class="alert alert-info alert-dismissable">
                                            <a class="panel-close close" data-dismiss="alert">×</a> This is an
                                            <strong>.alert</strong>. Use this to show important messages to the user.
                                        </div>
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">3 hrs ago</span>
                                                        Coming soon </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">Yesterday</span>
                                                        Coming soon </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">9/10</span> Coming
                                                        soon </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">9/4</span> Coming
                                                        soon </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">9/4</span> Coming
                                                        soon </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="edit">
                                        <form role="form">

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Pseudo</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text"
                                                        placeholder="Mon pseudo Circet">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Ancien Mot de
                                                    passe</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password"
                                                        placeholder="***************" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Mot de
                                                    passe</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password"
                                                        placeholder="***************" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    class="col-lg-3 col-form-label form-control-label">Confirmation</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password"
                                                        placeholder="***************" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    class="col-lg-3 col-form-label form-control-label">Addresse</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" value=""
                                                        placeholder="Mon adresse">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" value=""
                                                        placeholder="Ville">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text" value=""
                                                        placeholder="Code postal">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-lg-9">
                                                    <div class="form-group row">
                                                        <!--/row <label class="col-lg-3 col-form-label form-control-label">Nom</label>-->
                                                        <div class="col-lg-9">
                                                            <!--/row <input class="form-control" type="text" name="Nom" placeholder="Saisir nom">-->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <!--/row<label class="col-lg-3 col-form-label form-control-label">Prénom</label>-->
                                                        <div class="col-lg-9">
                                                            <!--/row<input class="form-control" type="text" name="prenom" placeholder="Saisir prénom">-->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <!--/row<label class="col-lg-3 col-form-label form-control-label">Email</label>-->
                                                        <div class="col-lg-9">
                                                            <!--/row<input class="form-control" type="email" placeholder="email@circet.fr">-->
                                                        </div>
                                                    </div>



                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input type="reset" class="btn btn-secondary" value="Quitter">
                                                    <input type="button" class="btn btn-primary" value="Enregistrer">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1 text-center">
                                <img method="post" src="<?php echo"http://localhost/ProjetCircet/circetapps/img/$photo";?>" class="mx-auto img-fluid img-circle d-block"
                                    alt="avatar" enctype="multipart/form-data"> 

                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input" value="">Parcourir</input><br>

                                    <button class="custom-file-control btn btn-primary">Modifier ma photo</button>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; CIRCET Morocco 2020</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Prêt pour quitter?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Selectionner "Deconnexion" si vous êtes sur de vouloir quitter votre
                            session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-primary"
                                href="http://localhost/ProjetCircet/index.html">Deconnexion</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
