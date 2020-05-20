<?php

// on declare la session
session_start();



// Puis on la détruit la session donc le numéro unique de session 

session_destroy();


header("location: http://localhost/ProjetCircet/index.html");

exit;


?>