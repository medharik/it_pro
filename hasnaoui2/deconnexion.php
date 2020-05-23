<?php

// on declare la session
session_start();

//vider les variables de la session
unset($_SESSION);
// Puis on la détruit la session donc le numéro unique de session 

session_destroy();


header("location: index.html");

exit;


?>