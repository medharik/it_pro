<?php


require_once "connectdb.php";

session_start();

if (isset($_post['submit']));


$email = htmlentities(trim($_POST['email']));
$password = htmlentities(trim($_POST['password']));


$sql_query = "SELECT count(*) as cntuser from employee where email='" . $email . "' AND password='" . hash('sha256', $password) . "'";
$stmt = $db->prepare($sql_query);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $row['cntuser'];

$sql_query2 = " SELECT count(*) as cntfirstime FROM employee where firstime=0 and activkey=0 and email='" . $email . "'";
$stmt = $db->prepare($sql_query2);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count2 = $row['cntfirstime'];

$sql_query3 = " SELECT count(*) as cntactivkey FROM employee where firstime=1 and activkey=1 and email='" . $email . "'";
$stmt3 = $db->prepare($sql_query3);
$stmt3->execute();
$row = $stmt3->fetch(PDO::FETCH_ASSOC);
$count3 = $row['cntactivkey'];



if (($count > 0) && ($count2 > 0)) {

    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));
    // Génération aléatoire d'une clé           
    $activkey = md5(time() . $email);
    // Géneration mail type
    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"[CIRCET Morocco]"<m.khalidhasnaoui@gmail.com>' . "\n";
    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
    $header .= 'Content-Transfer-Encoding: 8bit';
    $message = '
                     <html>
                        <body>
                           <div align="center">

                              <img src="images/Circetmorocco2.jpg" height="70px" alt="">
                              <br>
                              Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
                              ou copier/coller dans votre navigateur Internet.
                               
                              <a href="activation.php?email=' . htmlspecialchars(urlencode($email)) . '&activkey=' . $activkey . '">Confirmez votre compte !</a>
                               
                               
                              ---------------
                              Ceci est un mail automatique, Merci de ne pas y répondre.;
                              </div>
                        </body>
                     </html>
                     ';

    mail($email, "Confirmation de compte CIRCET Morocco", $message, $header);



    $query = "UPDATE `employee` SET `activkey`=:activkey  WHERE `employee`.`email` ='" . $email . "'";
    $stmt = $db->prepare($query);
    $stmt->execute(array(":activkey" => $activkey));

    echo "<script>alert(\"Binvenue sur votre espace employee Circet Morocco, Vous devez recveoir un lien sur votre boite mail afin de valider votre.!\")</script>";
    header("Refresh: 0; URL=index.html");
} elseif (($count > 0) && ($count3 > 0)) {

    $sql_query = $db->query("SELECT * from employee where email='" . $email . "' AND password='" . hash('sha256', $password) . "'");
    $user = $sql_query->fetch();



    // $_SESSION['user'] = $user;
    $_SESSION['user_id'] = $user['id'];
    // $_SESSION['buletin'] = ['test'=>1234];
    // echo $_SESSION['buletin']['test']


    header("location: circetapps/acceuilemployee.php");
} elseif ($count == 0) {

    echo "<script>alert(\"Email ou mot de passe incorrect! Veuillez patienter nous allons vous retrouner vers la page d'acceuil. Merci!\")</script>";
    header("Refresh: 0; URL=index.html");
} else {

    echo "<script>alert(\"Votre compte n'est toujours pas activé! Veuillez consulter votre boite mail, vous devez recevoir un lien d'activation. Merci!\")</script>";
    header("Refresh: 0; URL=index.html");
}
