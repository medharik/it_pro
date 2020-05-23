<?php

session_start();
require('connectdb.php');
//process de vérification

if(isset($_GET['email'],$_GET['activkey'] )){



$email = $_GET['email'];
$activkey = ($_GET['activkey']);

//Requête "première conenxion" KO et récuperer la clé gérérée
/*$sql_query= " SELECT count(*) as cntactivkey FROM employee where firstime=0 AND activkey='".$activkey."'";
$result = mysqli_query($db,$sql_query) or die("Erreur de requete ".mysqli_error($db));
$row = mysqli_fetch_array($result);
$count = $row['cntactivkey'];*/

    $sql_query = "SELECT count(*) as cntactivkey from employee where firstime=0 AND activkey='".$activkey."'";
    $stmt = $db->prepare($sql_query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $row['cntactivkey'];

//Vérifier si la requête ramène les bonnes valeurs
if($count > 0 ){

    //Mettre à jour la valeur de  "première connexion"
   /* mysqli_query($db,"UPDATE `employee` SET `firstime`=1 , `activkey`=0 WHERE `employee`.`email` ='".$email."'");
*/
    
    $query ="UPDATE `employee` SET `firstime`=:firstime , `activkey`=:activkey  WHERE `employee`.`email` ='".$email."' ";
    $stmt = $db->prepare($query);
    $stmt->execute(array(":firstime"=>1 , ":activkey"=>0 ));
    //Aficher message vérification compte OK
    header("Refresh: 0; URL=changepass.html");
    echo"<script>alert(\"Votre compte à bien été vérifié. Vous devez difinir un nouveau mot de passe!\")</script>";
    
}else{
  
    //Redirection vers page d'acceuil en cas d'erreur inatendue
    header("Refresh: 0; URL=index.html");
    echo"<script>alert(\"Compte invalide ou déja vérifé Veuillez vous connecter en utilisant votre mot de passe ou contacter votre administrateur en cas de problème!\")</script>";
    
    die();

}
}

?>
