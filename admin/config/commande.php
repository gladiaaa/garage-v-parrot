<?php

function ajouter($image, $nom, $prix, $km, $annee, $desc)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("INSERT INTO voiturevente (images, nom, prix, km, annee, description) VALUES (?, ?, ?, ?, ?, ?)");

        $req->execute(array($image, $nom, $prix, $km, $annee, $desc));

        $req->closeCursor();
    }
}

function afficher()
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("SELECT * FROM voiturevente ORDER BY id DESC");
        
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}

function supprimer($id)
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("DELETE FROM voiturevente WHERE id=?");
        $req->execute(array($id));
    }
}
?>