<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/bd.salle.inc.php";

$cree = false;
$msg="";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nSalle"]) && isset($_POST["nomSalle"]) && isset($_POST["nbPoste"])&& isset($_POST["indIP"])) {

    if ($_POST["nSalle"] != "" && $_POST["nomSalle"] != "" && $_POST["nbPoste"] != "" && $_POST["indIP"] != "") {
        $nSalle = $_POST["nSalle"];
        $nomSalle = $_POST["nomSalle"];
        $nbPoste = $_POST["nbPoste"];
        $indIP = $_POST["indIP"];

        // enregistrement des donnees
        $ret = addSalle($nSalle, $nomSalle, $nbPoste, $indIP);
        if ($ret) {
            $cree = true;
        } else {
            $msg = "la salle n'a pas été créée.";
        }
    }
 else {
    $msg="Veuillez renseigner tous les champs";    
    }
}

if ($cree) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Salle créée";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueConfirmationCreation.php";
    include "$racine/vue/pied.html.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Creer une salle";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueCreer.php";
    include "$racine/vue/pied.html.php";
}
?>