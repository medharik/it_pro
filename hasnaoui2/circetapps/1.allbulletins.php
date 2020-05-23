<?php

session_start();

if(!isset($_SESSION['user'])){

    header("location: ../index.html");
  
  } 

require_once "../connectdb.php";
require_once "configs.php";



$resultat1 = $db-> query("SELECT * from bulletin ");




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
        <span>Ma paie</span></a>
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
  <h1 class="h3 mb-0 text-gray-800">Consulter mes bulletins de paie </h1>
  <button href="#" class="  btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm"></i><br><label class="custom-file">Charger bulletins<br><input type="file" id="file" class="custom-file-input" name="parcourir" value=""></input></button>
</div>
<!-- Content Row -->
<div class="container">
            <div class="row ">  
                <div class="col-lg-9 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Choisir un bulletin</a>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                        <li class="nav-item">
                        </li>
                     </ul>                           
                     <div class="tab-content ">
                <div class="tab-pane active" id="profile">
         
                    <div class="row">
                        <div class="col-md-10">  
                            


                        <?php
    include"tableall.bulletins.php";


?>




</div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>  </div>  </div>

<?php
    include"footer.php";


?>