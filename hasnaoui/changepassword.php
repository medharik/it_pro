<?php

session_start();

require("connectdb.php");

if(isset($_post['enter']));

    $email=htmlentities(trim($_POST['email']));
    $changepass = hash('sha256', $_POST['changepass']);
    $changepass2 = htmlentities(trim($_POST['changepass2']));
        //Vérifier premier conenxion OK et activation KO
      
        
        $sql_query = "SELECT count(*) as activuser from employee where email='".$email."' AND firstime=1 AND activkey=1";
        $stmt = $db->prepare($sql_query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $row['activuser'];
        
       

        $sql_query2 = "SELECT count(*) as activuser2 from employee where email='".$email."' AND firstime=1 AND activkey=0";
        $stmt = $db->prepare($sql_query2);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count2 = $row['activuser2'];

  if($count2 > 0){ 

    

        $query ="UPDATE `employee` SET  `activkey`=:activkey , `password`=:changepass WHERE `employee`.`email` ='".$email."' ";
        $stmt = $db->prepare($query);
        $stmt->execute(array(":activkey"=>1 ,":changepass"=>$changepass) );

        echo"<script>alert(\"Mot de passe changé avec succès! Bienvenue. Dès maintenant,vous pouvez profiter plainement de votre espace professionnel. Merci \")</script>
        ";
        header("location: http://localhost/ProjetCircet/circetapps/acceuil.php?email=".$_GET['email']);

}elseif($count > 0) {
           
        //Vérifier premier conenxion OK et activation KO
        /*$sql_query1 = " select count(*) as activuser from employee where email='".$email."' AND firstime=1 and activkey=!NULL;
        $result1 = mysqli_query($connect,$sql_query1) or die("Erreur de requete ".mysqli_error($connect));
        $row1 = mysqli_fetch_array($result1);
        $count2 = $row['activuser'];*/
    
            echo"<script>alert(\"Compte déjà activé, avez-vous un problème d'authentification? Veuillez suivre la procédure de récuperation de votre mot de passe depuis la page d'acceuil, rubrique connexion. Merci\")</script>";
            header("Refresh: 0; URL=http://localhost/ProjetCircet/index.html");
           
        }else{
            
            echo"<script>alert(\"Votre compte n'est toujours pas activé! Veuillez consulter votre boite mail, vous devez recevoir un lien d'activation. Merci!\")</script>";
            header("Refresh: 0; URL=http://localhost/ProjetCircet/index.html");

        }

 ?>