<?php

session_start();

if(!isset($_SESSION['user'])){

  header("location: ../index.html");

} 

require_once "../connectdb.php";
require_once "configs.php";



$resultat = $db-> query("SELECT * from demande WHERE Emp_id=".$_SESSION['user']['id']);




?>

<?php

include"head.php";

?>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" >
          <i class="fas fa-fw fa-folder"></i>
          <span>Mes documents</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <?php
                include"sidebar.php";

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

</div>
<!-- Content Row -->
<div class="container">
    <div class="row my-2">
        <div class="col-lg-10 order-lg-2">
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
         
                    <div class="row ">
                        <div class="col-md-12">
<?php
  include"tabledemandes.php";
?>       
    </div>
                        
   
                    </div>
                    <!--/row-->
                </div>
         <div class="tab-pane mt-5" id="edit">
                            <form name="demande" role="form">    
                              <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Type document</label>
                                <div class="col-lg-6">
                                    <Select class="mdb-select form-control" type="text" placeholder="">
                                      <option selected>--------- Choisir ---------</option>
                                      <option value="1">Administratif</option>
                                      <option value="2">CNSS</option>
                                      <option value="3">Autre</option>
                                    </select>

                                </div>
                            </div>
                        
                          <div class="form-group row mt-5">
                            <label class="col-lg-3 col-form-label form-control-label">Libellé</label>
                            <div class="col-lg-6">
                                <Select class="form-control" type="text" placeholder="">
                                    <option selected>--------- Choisir ---------</option>
                                    <option value="1">Attestation de travail</option>
                                    <option value="2">Attestation de salaire</option>
                                    <option value="3">Domiciliation de salaire</option>
                                    <option value="4">Attestation de congé</option>
                                    <option value="5">Attestation de stage</option>
                                    <option value="6">Attestation de déplacement</option>
                                    <option value="7">Attestation de titularisation</option>
                                    <option value="8">Bordereau</option>
                                    <option value="9">Attestation de déplacement</option>
                                   
                              
                                
                                  </select>
                            </div>
                        </div>
                                <div class="form-group row mt-5">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Quitter">
                                        <input type="submit" name="demandedoc" class="btn btn-primary" value="Enregistrer">
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
