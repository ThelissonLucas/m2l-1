<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.salle.inc.php";
include_once "$racine/modele/authentification.inc.php";



// recuperation des donnees GET, POST, et SESSION
$idR = $_GET["nSalle"]; 

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$unSalle = getSalleByIdR($idR);
$unPoste = getPostebySalle($idR);



// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Detail de la salle";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailSalle.php";
include "$racine/vue/pied.html.php";
?>