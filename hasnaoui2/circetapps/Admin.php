<?php
session_start();


if(!isset($_SESSION['user'])){

    header("location: ../index.html");
  
  } 

require_once "../connectdb.php";
require_once "configs.php";







?>
<!DOCTYPE html>
<html lang="fr">

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
            <a class="sidebar-brand  d-flex align-items-center justify-content-center" href="1.acceuil.php">
                <div class="sidebar-brand-icon text-dark">
                    <i class="fas fa-home"></i>
                </div>
       
            </a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link">
        <i class="fas fa-rocket"></i>
        <span>Espace Pro</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php
    include"sidebar.php";

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
                 <?php echo $pseudo; ?>
            </span>
            <img class="img-profile rounded-circle" type="file" name="avatar"
                src="img/<?php echo $photo;?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
             aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="http://localhost/ProjetCircet/circetapps/acceuilemployee.php">
                 <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 Profile
             </a>-->
                             
                             
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  name="deconnexion"
                     data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Deconnexion
                </a>

</div>
        </li>x

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
                    <a href=""  data-target="#profile" data-toggle="tab" class="nav-link active">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Modifier mes coordonnées</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Changer mot de passe</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                 
                    <div class="row mx-2">
                        <div class="col-md-6">
                            <p class="font-weight-bold"> <?php echo ucwords($prenom)," ", strtoupper($nom); ?></p>
                            <p>Age :  <?php echo $diff->format('%y') ?></p>
                            <p>CIN :  <?php echo $cin; ?> </p>
                            <p>CNSS : <?php echo $codeCnss; ?></p> 
                            <p>Tél :  <?php echo $tel; ?></p>
                            <p>Service : <?php echo replaceSpecialChar(utf8_decode($service)) ?></p>
                            <p>Fonction :  <?php echo replaceSpecialChar(utf8_decode($fonction)) ?></p>
                            <p> Date d'embauche : <?php echo date('d-M-Y', strtotime($dateEmbauche) )?></p>
                            <p>Adresse actuelle : <?php echo ' '.replaceSpecialChar($adresse) ; ?></p>
                         </div>
                      
                    
                    </div>
                    <!--/row-->
                </div>

<?php

if(isset($_POST['infos'])){
        $newmobile=$_POST['newmobile']; 
        $newadresse=replaceSpecialChar($_POST['newadresse']);
        $email=$_SESSION['user']['email'];
        $id=$_SESSION['user']['id'];
   
        $query ="UPDATE `employee` SET `adresse`=:newadresse, `tel`=:newmobile WHERE `employee`.`id` ='".$id."' and `employee`.`email` ='".$email."' ";
        $update = $db->prepare($query);
        $update->execute(array(":newadresse"=>$newadresse,":newmobile"=>$newmobile) );
if($update){


    echo"<script>alert(\"Informations modifiée avec succès! Cliquez sur OK pour revenir à votre espace Pro. Merci \")</script>
    ";
        
}else{
    echo"<script>alert(\"Erreur inattendue ! Veuillez réessayer à nouveau, ou contacter votre administrateur si erreur persiste. Merci \")</script>
    ";
}
}

?>

                <div class=" tab-pane" id="messages">
                    <form method="POST" role="form">
                        <div class="form-group row mt-3">
                        <label class="col-lg-3 col-form-label form-control-label">N° de contact</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text"
                      name="newmobile" id="mobile" placeholder="Mobile actuel" value="" required>
                </div></div> <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                <div class="col-lg-9">
                    <textarea name="newadresse" id="adresse" cols="30" rows="5" class="form-control" type="text" 
                        placeholder="Saisir adresse actuelle" value="adresse" required></textarea>  
                </div></div><div class="form-group row">
              
                <div class="col-lg-9">
                
                </div></div><div class="form-group row">
            
                <div class="col-lg-9">
       
                </div></div><div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
              
                
                </div>
               

                            <div class="form-group row ">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" name="cancel" value="Reset">
                                    <button type="submit" class="custom-file-control btn btn-primary shadow" name="infos" value="Enregistrer">Enregistrer</button>
                                </div>
                            </div><br><br>
                        </form>
                </div>
 
                
<?php

if(isset($_POST['save'])){

        $oldpass=hash('sha256',$_POST['oldpass']);  
        $newpass=hash('sha256',$_POST['newpass']);
        $email=$_SESSION['user']['email'];

        $query ="UPDATE `employee` SET  `password`=:newpass WHERE `employee`.`password` ='".$oldpass."' and `employee`.`email` ='".$email."' ";
        $stmt = $db->prepare($query);
        $stmt->execute(array(":newpass"=>$newpass) );
if($stmt){


    echo"<script>alert(\"Mot de passe changé avec succès! Cliquez sur OK pour revenir à votre espace Pro. Merci \")</script>
    ";
        
}else{
    echo"<script>alert(\"Erreur inattendue ! Veuillez réessayer à nouveau, ou contacter votre administrateur si erreur persiste. Merci \")</script>
    ";
}
}

?>

                <div class="tab-pane" id="edit">
                <form method="POST" role="form">     
                  
                        <div class="form-group row">
                   
                
                 
                </div> <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Ancien Mot de
                    passe</label>
                <div class="col-lg-9">
                    <input name="oldpass" class="form-control" type="password"
                        placeholder="***************" value="" 
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Doit contenir au moins un chiffre, une lettre majuscule et une minuscule, et au moins 8 caractères" required>
                </div></div> <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Nouveau Mot de
                    passe</label>
                <div class="col-lg-9">
                    <input name="newpass" id="newpass" class="form-control" type="password" 
                        placeholder="***************" value=""
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Doit contenir au moins un chiffre, une lettre majuscule et une minuscule, et au moins 8 caractères" required>
                </div></div><div class="form-group row">
                <label
                    class="col-lg-3 col-form-label form-control-label">Confirmation</label>
                <div class="col-lg-9">
                    <input name="newpass2" id="newpass2" class="form-control" type="password"
                        placeholder="***************" value="" 
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Doit contenir au moins un chiffre, une lettre majuscule et une minuscule, et au moins 8 caractères" required>
                </div></div><div class="form-group row">
            
                <div class="col-lg-9">
       
                </div></div><div class="form-group row mt-5">
                <label class="col-lg-3 col-form-label form-control-label"></label>
              
                
                </div>
  
             <div class="form-group row ">
                 <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                     <input type="reset" class="btn btn-secondary" name="cancel" value="Reset">
                      <button type="submit" class="custom-file-control btn btn-primary shadow" Onklick="validatePassword()" name="save" value="Enregistrer">Enregistrer</button>
                 </div>
            </div>
        </form>
        <script type="text/javascript">
                    var password = document.getElementById("newpass")
                     , confirm_password = document.getElementById("newpass2");

                        function validatePassword(){
                            if(password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Attention!!!Mos de passe incohérents");
                             } else {
                           confirm_password.setCustomValidity('');
                                 }
                                }
                                password.onchange = validatePassword;
                                confirm_password.onkeyup = validatePassword;
                            </script>
        <br><br>
     </div>
     
</div>


 
     </div>
   </div>
  </div>
 </div>

<?php
  include"footer.php";
?>