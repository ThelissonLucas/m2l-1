<?php

include_once "bd.inc.php";

function getPosteBySalle($nSalle){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste where nSalle = '".$nSalle."'");
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

function getPostes(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste");
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

function getSegments(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from segment");
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

function getTypes(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from types");
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

function getSalleByNum($nSalle) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select *, salle.nbPoste as nombrePoste from salle inner join segment on salle.indIP = segment.indIP where nSalle=:nSalle");
        $req->bindValue(':nSalle', $nSalle, PDO::PARAM_STR);
        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $ligne;
}

function getSalles() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle");
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


function getSallesByNom($nom) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle where nomSalle like :nom");
        $req->bindValue(':nom', "%".$nom."%", PDO::PARAM_STR);

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

function getSallesByAdresseIP($ip) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle where indIP like :ip");
        $req->bindValue(':ip', "%".$ip."%", PDO::PARAM_STR);
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


function creerPoste($nomPoste, $typePoste, $numSalle, $numPoste, $ad) {
    try {
        $cnx = connexionPDO();
        $reqindIP = "SELECT indIP from Salle WHERE nSalle ='".$numSalle."';";
        $reqindIP = $cnx->query($reqindIP);
        $resindIP = $reqindIP->fetch();
        $resindIP = $resindIP['indIP'];
        $req = "INSERT  INTO Poste
            (nPoste, nomPoste, typePoste, nSalle, indIP, ad)
            VALUES ('".$numPoste."', '".$nomPoste."', '".$typePoste."', '".$numSalle."' , '".$resindIP."', '".$ad."');";
        $resultat = $cnx->query($req);
        return true;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
        return false;
    }
}

function modifierPoste($nPoste, $nomPoste, $ad, $typePoste, $nSalle){
    try {
        $cnx = connexionPDO();
        $reqindIP = "SELECT indIP from Salle WHERE nSalle ='".$nSalle."';";
        $reqindIP = $cnx->query($reqindIP);
        $resindIP = $reqindIP->fetch();
        $resindIP = $resindIP['indIP'];
        $req = $cnx->prepare("update poste set nomPoste = '".$nomPoste."', indIP = '".$resindIP."', typePoste = '".$typePoste."', ad = '".$ad."', nSalle = '".$nSalle."' where nPoste = '".$nPoste."'");
        $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function supprimerPoste($nPoste){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("delete from poste where nPoste = '".$nPoste."'");
        $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getInfosPoste($nPoste) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste inner join salle on poste.nSalle = salle.nSalle inner join segment on poste.indIP = segment.indIP where nPoste = '".$nPoste."'");
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

function getSallesByAdresse($indIP) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle where indIP = '".$indIP."'");
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

?>