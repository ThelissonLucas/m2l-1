<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/bd.poste.inc.php";

$cree = false;
$msg="";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nPoste"]) && isset($_POST["nomPoste"]) && isset($_POST["indIP"]) && isset($_POST["ad"]) && isset($_POST["typePoste"]) && isset($_POST["nSalle"])) {

    if ($_POST["nPoste"] != "" && $_POST["nomPoste"] != "" && $_POST["indIP"] != "" && $_POST["ad"] != "" && $_POST["typePoste"] != "" && $_POST["nSalle"] != "") {
        $nPoste = $_POST["nPoste"];
        $nomPoste = $_POST["nomPoste"];
        $indIP = $_POST["indIP"];
        $ad = $_POST["ad"];
        $typePoste = $_POST["typePoste"];
        $nSalle = $_POST["nSalle"];

        // enregistrement des donnees
        $ret = addPoste($nPoste, $nomPoste, $indIP, $ad, $typePoste, $nSalle);
        if ($ret) {
            $cree = true;
        } else {
            $msg = "le poste n'a pas été crée.";
        }
    }
 else {
    $msg="Veuillez renseigner tous les champs";    
    }
}

if ($cree) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Poste crée";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueConfirmationCreation.php";
    include "$racine/vue/pied.html.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Creer un poste";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueCreer.php";
    include "$racine/vue/pied.html.php";
}
?>