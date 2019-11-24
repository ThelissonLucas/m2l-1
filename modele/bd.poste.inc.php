<?php

include_once "bd.inc.php";


function getIPs() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste group by indIP");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getAds() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste group by ad");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getTypes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste group by typePoste");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getNumSalles() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste group by nSalle");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getPostes() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste group by nPoste");
        $req->execute();
        
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

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