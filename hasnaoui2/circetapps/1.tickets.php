<?php

session_start();

if(!isset($_SESSION['user'])){

    header("location: ../index.html");
  
  } 

require_once "../connectdb.php";
require_once "configs.php";



$resultat = $db-> query("SELECT * from demande");





if(isset($_POST['bulletin'])){



$file = $chemin; 

    
// Type de contenu dd l'en-tête
header('Content-type: application/pdf'); 
  
header('Content-Disposition: inline; filename="' . $file . '"'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
// Lire le fichier
@readfile($file); 

}

/*

$file = 'http://localhost/ProjetCircet/circetapps/bulletin/SAMAR0020-05-2020.pdf'; 
    
// Type de contenu dd l'en-tête
header('Content-type: application/pdf'); 
  
header('Content-Disposition: inline; filename="' . $file . '"'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
// Lire le fichier
@readfile($file); 


}
*/


?>

<?php

include"head.php";
?>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" >
        <i class="fas fa-ticket-alt"></i>
        <span>Espace tickets</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
        <div class="row">
            <div class="col-md-12">
</div>
</div>   
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
  <h1 class="h3 mb-0 text-gray-800">Gérer les demandes de documents </h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Exporter tickets</a>
</div>
<!-- Content Row -->
<div class="container">
            <div class="row ">
                <div class="col-lg-12 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" class="nav-link active ">Consulter tous les tickets</a>
                        </li>
                        
                   
                     </ul> 
                                      <!--/row<h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>-->
                  <div class="tab-content ">
                <div class="tab-pane active" id="profile">
         
                    <div class="row">
                        <div class="col-md-10">                          
                   
<?php
    include"tabletickets.php";

?>
</div>
                        
   
                        </div>
                        <!--/row-->
                    </div>

            </div>
        </div>
    </div>
    </div>
    </div>
  

<?php
    include"footer.php";


?>