<?php
function connecter_db()
{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        try {
                $link = new PDO("mysql:host=localhost;dbname=dbprojet_mariyata", "root", "", $options);
                return $link;
        } catch (PDOException $e) {
                die("Erreur de connexion de la base de donne: " . $e->getMessage());
        }
}
function ajouter_client($nom, $prenom, $email, $adresse, $tel, $user_name, $passeword, $date_creation)
{
        try {
                $link = connecter_db();
                $rp = $link->prepare("insert into client(nom,prenom,email,adresse,tel,user_name,passeword,date_creation )values(?,?,?,?,?,?,?,?)");
                $rp->execute([$nom, $prenom, $email, $adresse, $tel, $user_name, $passeword, $date_creation]);
                return $link;
        } catch (PDOException $e) {
                die("Erreur d'ajout de client " . $e->getMessage());
        }
}
