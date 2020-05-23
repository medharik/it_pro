<?php

session_start();

if(!isset($_SESSION['user'])){

    header("location: ../index.html");
  
  } 

require_once "../connectdb.php";
require_once "configs.php";



$resultat = $db-> query("SELECT * from employee");







?>

<?php

include"head.php";
?>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" >
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Espace employés</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php
    include"sidebar.php";
?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      
      <?php
include"navbar.php";

?>
<!-- End of Topbar -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Gérer les employés </h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Exporter liste des employés</a>
</div>
<!-- Content Row -->
<div class="container">
            <div class="row ">
                <div class="col-lg-12 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Consulter tous les employés</a>
                        </li>
                        
                   
                     </ul>                           
                   
<?php
    include"tableemployes.php";

?>


            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
  

<?php
    include"footer.php";


?>