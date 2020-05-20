<?php


require_once "../connectdb.php";
include "configs.php";
session_start();

if(isset($_post['enter'])){

  $email=htmlentities(trim($_POST['email']));
  $password = htmlentities(trim($_POST['password']));
       
    $sql_query = "SELECT count(*) as cntuser from employee where email='".$email."' AND password='".hash('sha256', $password)."'";
    $stmt = $db->prepare($sql_query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $row['cntuser'];

    $sql_query2= " SELECT count(*) as cntfirstime FROM employee where firstime=0 and activkey=0 and email='".$email."'";
    $stmt = $db->prepare($sql_query2);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $count2 = $row['cntfirstime'];

    $sql_query3= " SELECT count(*) as cntactivkey FROM employee where firstime=1 and activkey=1 and email='".$email."'";
    $stmt3= $db->prepare($sql_query3);
    $stmt3->execute();
    $row = $stmt3->fetch(PDO::FETCH_ASSOC);
    $count3 = $row['cntactivkey'];


    
   if(($count > 0) && ($count2 > 0)){

   
            // Génération aléatoire d'une clé           
            $activkey = md5(time().$email);
            // Géneration mail type
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"[CIRCET Morocco]"<m.khalidhasnaoui@gmail.com>'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            $message='
                     <html>
                        <body>
                           <div align="center">

                              <img src="images/Circetmorocco2.jpg" height="70px" alt="">
                              <br>
                              Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
                              ou copier/coller dans votre navigateur Internet.
                               
                              <a href="http://localhost/ProjetCircet/activation.php?email='.htmlspecialchars(urlencode($email)).'&activkey='.$activkey.'">Confirmez votre compte !</a>
                               
                               
                              ---------------
                              Ceci est un mail automatique, Merci de ne pas y répondre.;
                              </div>
                        </body>
                     </html>
                     '; 
                    
                    mail($email, "Confirmation de compte CIRCET Morocco", $message, $header);

                    

                    $query ="UPDATE `employee` SET `activkey`=:activkey  WHERE `employee`.`email` ='".$email."'";
                    $stmt = $db->prepare($query);
                    $stmt->execute(array(":activkey"=>$activkey));

                    echo"<script>alert(\"Binvenue sur votre espace employee Circet Morocco, Vous devez recveoir un lien sur votre boite mail afin de valider votre.!\")</script>";
                    header("Refresh: 0; URL=http://localhost/ProjetCircet/index.html");
             
            
        }elseif (($count > 0) && ($count3 > 0)) {
            
            $sql_query = $db-> query("SELECT * from employee where email='".$email."' AND password='".hash('sha256', $password)."'");
            $user= $sql_query->fetch();
          
      
              
            $_SESSION['id'] = $user;
            $id=$_SESSION['id']['id'];
            $email=$_SESSION['id']['email'];

           
           if(isset($_SESSION['id'])){

            header("location: http://localhost/ProjetCircet/circetapps/acceuilemployee.php?id=$id");

           }


        }elseif ($count == 0) {
      
         echo"<script>alert(\"Email ou mot de passe incorrect! Veuillez patienter nous allons vous retrouner vers la page d'acceuil. Merci!\")</script>";
         header("Refresh: 0; URL=http://localhost/ProjetCircet/index.html");
        
        }else{ 
         
         echo"<script>alert(\"Votre compte n'est toujours pas activé! Veuillez consulter votre boite mail, vous devez recevoir un lien d'activation. Merci!\")</script>";
         header("Refresh: 0; URL=http://localhost/ProjetCircet/index.html");
       
        }
        
      }    
            
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

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h4 class="h4 text-gray-900 mb-4">Bienvenue !</h4>
                   
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Email Circet"
                      pattern="[a-z0-9._-]+@circet.fr" title="Veuillez saisir votre adresse mail @circet.fr" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Mot de passe"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre, une lettre majuscule et une minuscule, et au moins 8 caractères" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                      </div>
                    </div>
                    <button href="" name="entrer" class="btn btn-primary btn-user btn-block">
                      Entrer
                    </button>
                    <hr>
               
                  </form>
            
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Mot de passe oublié ?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

</body>

</html>
