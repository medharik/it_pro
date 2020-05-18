<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "lahfiddb";

$con = mysqli_connect($servername, $username, $password,$db);


if (!$con->set_charset("utf8")) {
    die("Connection failed: " . mysqli_connect_error());
}


?>