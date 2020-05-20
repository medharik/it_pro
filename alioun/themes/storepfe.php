<?php
require("functionpfe.php");
session_start();
extract($_POST);


$client_id = ajouter($nom, $prenom, $nt, $adresse);
$client = find($client_id, "client");
$_SESSION['client_id'] = $client_id;
$_SESSION['nom'] = $client['nom'];
$_SESSION['prenom'] = $client['prenom'];
header("location:menu.php");
//$id_commande=ajouter_commande($client_id,1,date('Y-m-d H:m:s'),'en cours de traiment',0,0);

//$_SESSION['cliemnt_ud']=$client_id;
//$_SESSION['commande_id']=$id_commande;
//header("location:list_repas.php");
