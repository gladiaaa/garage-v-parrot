<?php

function mettreajourhoraire($id, $hrouvlun, $hrpauselun, $hrfpauselun, $hrfermeturelun, $hrouvmar, $hrpausemar, $hrfpausemar, $hrfermeturemar, $hrouvmer, $hrpausemer, $hrfpausemer, $hrfermeturemer, $hrouvjeu, $hrpausejeu, $hrfpausejeu, $hrfermeturejeu, $hrouvven, $hrpauseven, $hrfpauseven, $hrfermetureven)
{

    require("connexionhoraire.php");

    $req = $accessho->prepare("UPDATE horairessite SET 
        hrouvlun=?, hrpauselun=?, hrfpauselun=?, hrfermeturelun=?,
        hrouvmar=?, hrpausemar=?, hrfpausemar=?, hrfermeturemar=?,
        hrouvmer=?, hrpausemer=?, hrfpausemer=?, hrfermeturemer=?,
        hrouvjeu=?, hrpausejeu=?, hrfpausejeu=?, hrfermeturejeu=?,
        hrouvven=?, hrpauseven=?, hrfpauseven=?, hrfermetureven=?
        WHERE id=1")
        ;

    $req->execute(array(
        $hrouvlun, $hrpauselun, $hrfpauselun, $hrfermeturelun,
        $hrouvmar, $hrpausemar, $hrfpausemar, $hrfermeturemar,
        $hrouvmer, $hrpausemer, $hrfpausemer, $hrfermeturemer,
        $hrouvjeu, $hrpausejeu, $hrfpausejeu, $hrfermeturejeu,
        $hrouvven, $hrpauseven, $hrfpauseven, $hrfermetureven,
    ));


    $req->closeCursor();
}

if ($req->execute()) {
    echo "Mise à jour réussie !";
} else {
    echo "Erreur lors de la mise à jour : " . $req->errorInfo()[2];
}
?>