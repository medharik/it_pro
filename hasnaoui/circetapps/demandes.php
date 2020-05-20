<?php

session_start();
require_once "../connectdb.php";
require_once "configs.php";


$resultat = $db-> query("SELECT * from demande");
$etatDemande=$resultat->fetch();

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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="shortcut icon" href="../images/favicon.ico">
 
 <!-- Custom styles for this template -->
 <link href="css/sb-admin-2.min.css" rel="stylesheet">
<!-- Custom styles for this page -->
 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/ProjetCircet/circetapps/acceuilemployee.php">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-home text-dark"></i>
        </div>
      
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" >
          <i class="fas fa-tasks"></i>
          <span>Mes documents</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <?php
                include"sidebar_employee.php";

            ?>    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
      
<?php
include"navbar.php";

?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gérer mes demandes de documents</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<!-- Content Row -->
<div class="container">
    <div class="row my-2">
        <div class="col-lg-9 order-lg-2">
             <ul class="nav nav-tabs">
                 <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab"
                         class="nav-link active">Consulter mes demandes</a>
                </li>
                <li class="nav-item">

                 </li>
                 <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Ajouter une demande</a>
                   </li>
            </ul>
                
                  <!--/row<h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>-->
                  <div class="tab-content ">
                <div class="tab-pane active" id="profile">
         
                    <div class="row">
                        <div class="col-md-12">
<?php
  include"tabledemandes.php";
?>       
    </div>
                        
   
                    </div>
                    <!--/row-->
                </div>
         <div class="tab-pane mt-5" id="edit">
                            <form role="form">    
                              <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Administratif</label>
                                <div class="col-lg-9">
                                    <Select class="mdb-select form-control" type="text" placeholder="">
                                      <option selected>Choisir</option>

                                    <option value="6">Attestation de titularisation</option>
                                    <option value="1">Attestation de travail</option>
                                    <option value="2">Attestation de salaire</option>
                                    <option value="3">Domiciliation de salaire</option>
                                    <option value="4">Attestation de congé</option>
                                    <option value="5">Attestation de stage</option>
                                    <option value="6">Attestation de déplacement</option>

                                  </select>
  
       
                                </div>
                            </div>
                        
                          <div class="form-group row mt-5">
                            <label class="col-lg-3 col-form-label form-control-label">CNSS</label>
                            <div class="col-lg-9">
                                <Select class="form-control" type="text" placeholder="">
                                  
                                  <option selected>Choisir</option>
                                  <option value="1">Bordoureau</option>
                                  <option value="2">Document 2</option>
                                  <option value="3">Document 3</option>
                                  <option value="4">Document 4</option>
                                
                                  </select>
                            </div>
                        </div>
                                <div class="form-group row mt-5">
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
             </div>
          </div>
      </div>
  </div>
<?php
   include"footer.php";
?>
