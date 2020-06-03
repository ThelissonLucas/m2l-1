<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "listeSalles.php";
    $lesActions["liste"] = "listeSalles.php";
    $lesActions["detail"] = "detailSalle.php";
    $lesActions["recherche"] = "rechercheSalle.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["creation"] = "creation.php";
    $lesActions["suppression"] = "suppression.php";
    $lesActions["modification"] = "modification.php";
    $lesActions["choixmodif"] = "choixmodif.php";
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>