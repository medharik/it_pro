<?php
function connecter_db()
{
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    // Now you create your connection string(creer la chaine de connexion)
    try {
        // Then pass the options as the last parameter in the connection string
        $link = new PDO("mysql:host=localhost; dbname=db_pfe_resto;port=3306", "root", "", $options);
        return $link;
        // That's how you can set multiple attributes
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}

function ajouter($nom, $prenom, $numero_telephone, $adresse)
{
    try {
        //connexion avec la base 
        $link = connecter_db();
        // preparer une requete bd  dans cette connexion: SQL
        $rp = $link->prepare("insert into client(nom,prenom,numero_telephone,adresse) values(?,?,?,?)");
        // executer la requete  preparee
        $rp->execute([$nom, $prenom, $numero_telephone, $adresse]);
        return $link->lastinsertid();
    } catch (PDOException $e) {
        die("erreur d'ajout de client dans  la base de donnees " . $e->getMessage());
    }
}
function find($id, $table)
{
    try {
        //connexion avec la base 
        $link = connecter_db();
        // preparer une requete bd  dans cette connexion: SQL
        $rp = $link->prepare("select * from $table where id=?");
        // executer la requete  preparee
        $rp->execute([$id]);
        return $rp->fetch();
    } catch (PDOException $e) {
        die("erreur d'ajout de client dans  la base de donnees " . $e->getMessage());
    }
}
