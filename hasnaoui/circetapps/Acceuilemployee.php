<?php
session_start();
require_once "configs.php";
require_once "../utils.class.php";
require_once "../class_employee.php";






Utils::connecter_db();
Utils::$TABLE='employee';



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
    <link rel="shortcut icon" href="../images/favicon.ico">
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
    include"sidebar_employee.php";

?>

<!-- Fin Sidebar -->

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
         <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
         <ul class="navbar-nav ml-auto ">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none ">
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

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                 <?php echo $_SESSION['user']['pseudo']; ?>
            </span>
            <img class="img-profile rounded-circle" type="file" name="avatar"
                src="<?php echo "http://localhost/ProjetCircet/circetapps/img/$photo";?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
             aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="http://localhost/ProjetCircet/circetapps/acceuilemployee.php">
                 <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 Profile
             </a>-->
                             
                             
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" action="http://localhost/ProjetCircet/deconnexion.php" name="deconnexion"
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
         <h1 class="h3 mb-0 mx-2 text-gray-800"> Bienvenue sur votre espace professionnel !</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                            <p> <?php echo $prenom," ", $nom; ?></p>
                            <p>Age :  <?php echo $diff->format('%y') ?></p>
                            <p>CIN :  <?php echo $cin; ?> </p>
                            <p>CNSS : <?php echo $codeCnss; ?></p> 
                            <p>Tél :  <?php echo $tel; ?></p>
                            <p>Service : <?php echo replaceSpecialChar($service) ?></p>
                            <p>Fonction :  <?php echo replaceSpecialChar($fonction) ?></p>
                            <p> Date d'embauche : <?php echo date('d-m-Y', strtotime($dateEmbauche) )?></p>
                            <p>Adresse actuelle : <?php echo ' '.replaceSpecialChar($adresse) ; ?></p>
                         </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-12">
                                   
                        </div>
                    </div>
                    <!--/row-->
                </div>
<div class="tab-pane" id="messages">
    <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> This is an
        <strong>.alert</strong>. Use this to show important messages to the user.
     </div>
 
</div>
<div class="tab-pane" id="edit">
    <form method="POST" role="form">
<div class="form-group row">
 <label class="col-lg-3 col-form-label form-control-label">Pseudo</label>
<div class="col-lg-9">
     <input class="form-control" type="text"
         placeholder="Mon pseudo Circet">
 </div></div> <div class="form-group row">
 <label class="col-lg-3 col-form-label form-control-label">Ancien Mot de
    passe</label>
 <div class="col-lg-9">
     <input class="form-control" type="password"
         placeholder="***************" value="" required>
 </div></div> <div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Mot de
    passe</label>
 <div class="col-lg-9">
    <input class="form-control" type="password"
        placeholder="***************" value="" required>
</div></div><div class="form-group row">
 <label
     class="col-lg-3 col-form-label form-control-label">Confirmation</label>
<div class="col-lg-9">
    <input class="form-control" type="password"
         placeholder="***************" value="" required>
</div></div><div class="form-group row">
<label
     class="col-lg-3 col-form-label form-control-label">Addresse</label>
<div class="col-lg-9">
     <input class="form-control" type="text" value=""
                                                        placeholder="Mon adresse">
 </div></div><div class="form-group row">
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


    </div>
</div>

             <div class="form-group row">
                 <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                     <input type="reset" class="btn btn-secondary" name="cancel" value="Quitter">
                      <button type="submit" class="custom-file-control btn btn-primary shadow" name="save" value="Enregistrer">Enregistrer</button>
                 </div>
            </div>
        </form>
     </div>
</div>
            </div>
             <div class="col-lg-4 order-lg-1 text-center shadow bg-white border border-warning rounded">
                <img  method="post" src="<?php echo"http://localhost/ProjetCircet/circetapps/img/$photo";?>" class="mx-auto img-fluid img-circle d-block"
                    alt="avatar" enctype="multipart/form-data"> 

                <label class="custom-file">
                     <input type="file" id="file" class="custom-file-input" name="parcourir" value="">Parcourir</input><br>

                     <button type="submit" class="custom-file-control btn btn-primary shadow" name="modifier">Modifier ma photo</button>
                </label>
             </div>
            </div>
    </div>
</div>


<?php
  include"footer.php";
?>