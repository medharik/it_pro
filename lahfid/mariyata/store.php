<?php
require("functions.php");
session_start();
extract($_POST);
$client = ajouter_client($nom, $prenom, $email, $adresse, $tel, $user_name, $passeword, $date_creation);
$_SESSION['client'] = $client;
header("location:index.php");
