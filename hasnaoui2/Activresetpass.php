
<?php

session_start();

require "connectdb.php";

if(isset($_POST['submit']));

$email=htmlentities(trim($_POST['email']));


$sql_query = "SELECT count(*) as cntuser from employee where email='".$email."'";
$stmt = $db->prepare($sql_query);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $row['cntuser'];


if($count > 0){

   $email=htmlentities(trim($_POST['email']));

       // Génération aléatoire d'une clé           
       $activkey = md5(time().$email);
       // Géneration mail type
       $header="MIME-Version: 1.0\r\n";
       $header.='From:"[CIRCET Morocco - reset password ]"<m.khalidhasnaoui@gmail.com>'."\n";
       $header.='Content-Type:text/html; charset="uft-8"'."\n"; 
       $header.='Content-Transfer-Encoding: 8bit';
       $objet= 'Réinitialisation mot de passe CIRCET Morocco';
       $message='
                <html>
                   <body>
                      <div align="center">

                         <img src="images/Circetmorocco2.jpg" height="70px" alt="">
                         <br>
                         Pour réinisialiser le mot de passe de votre compte, veuillez cliquer sur le lien ci-dessous
                         ou copier/coller dans votre navigateur Internet.
                          
                         <a href="resetpass.php?email='.htmlspecialchars(urlencode($email)).'&activkey='.$activkey.'">Confirmez votre compte !</a>
                          
                          
                         ---------------
                         Ceci est un mail automatique, Merci de ne pas y répondre.;
                         </div>
                   </body>
                </html>
                '; 
             
               $message=utf8_decode($message);
               $objet=utf8_decode($objet);
               mail($email, $objet, $message, $header);
               //Inserer la clé gérénée dans la BDD
               $query ="UPDATE `employee` SET `activkey`=:activkey  WHERE `employee`.`email` ='".$email."'";
               $stmt = $db->prepare($query);
               $stmt->execute(array(":activkey"=>$activkey));

               echo"<script>alert(\"Un lien vient de vous être envoyé, veuillez consulter votre boite mail Circet. Merci!\")</script>";
               header("Refresh: 0; URL=index.html");
   
   }elseif ($count == 0) {
 
    echo"<script>alert(\"Compte invalide ou inexistant ! Veuillez saisir votre adresse mail Circet. Merci!\")</script>";
    header("Refresh: 0; URL=index.html");
   
   }else{ 
    
    echo"<script>alert(\"Votre compte n'est toujours pas activé! Veuillez consulter votre boite mail, vous devez recevoir un lien d'activation. Merci!\")</script>";
    header("Refresh: 0; URL=index.html");
  
   }