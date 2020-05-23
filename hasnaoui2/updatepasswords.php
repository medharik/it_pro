<?php


session_start();

require "connectdb.php";

if(isset($_post['submit']));

$passwords = hash('sha256', $_POST['passwords']);
$query ="UPDATE `employee` SET `password`=:passwords";
$stmt = $db->prepare($query);
$stmt->execute(array(":passwords"=>$passwords));

if ($stmt) {
  echo"<script>alert(\"Tous les mots de passe ont été mofifiés avec succès!\")</script>";
  header("Refresh: 0; URL=updatepasswords.html");
}


?>

