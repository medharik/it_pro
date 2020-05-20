<?php

session_start();



require_once "../connectdb.php";
require_once "configs.php";

$id=$_SESSION['user']['id'];

$sql_query = $db-> query("SELECT * from bulletin");
$bulletin=$sql_query->fetch();
$_SESSION['bulletin']=$bulletin;
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
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Ma paie</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php
    include"sidebar_employee.php";
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
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<!-- Content Row -->
<div class="container">
            <div class="row ">
                <div class="col-lg-9 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Consulter mes demandes</a>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                        <li class="nav-item">
                        </li>
                     </ul>                           
                   
<?php
    include"tablebulletins.php";

?>


            </div>
        </div>
    </div>
    </div>
    </div>
  

<?php
    include"footer.php";


?>