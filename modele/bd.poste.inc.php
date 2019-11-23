<?php

include_once "bd.inc.php";

function addPoste($nPoste, $nomPoste, $indIP, $ad, $typePoste, $nSalle) {
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into poste (nPoste, nomPoste, indIP, ad, typePoste, nSalle) values(:nPoste,:nomPoste,:indIP,:ad,:typePoste,:nSalle)");
        $req->bindValue(':nPoste', $nPoste, PDO::PARAM_STR);
        $req->bindValue(':nomPoste', $nomPoste, PDO::PARAM_STR);
        $req->bindValue(':indIP', $indIP, PDO::PARAM_STR);
        $req->bindValue(':ad', $ad, PDO::PARAM_STR);
        $req->bindValue(':typePoste', $typePoste, PDO::PARAM_STR);
        $req->bindValue(':nSalle', $nSalle, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


?>