<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/bd.poste.inc.php";

$modifie = false;

//recup des valeurs
if (isset($_POST["nPoste"]) && isset($_POST["nomPoste"]) && isset($_POST["indIP"]) && isset($_POST["ad"]) && isset($_POST["typePoste"]) && isset($_POST["nSalle"])) {

    if ($_POST["nPoste"] != "" && $_POST["nomPoste"] != "" && $_POST["indIP"] != "" && $_POST["ad"] != "" && $_POST["typePoste"] != "" && $_POST["nSalle"] != "") {
        $nPoste = $_POST["nPoste"];
        $nomPoste = $_POST["nomPoste"];
        $indIP = $_POST["indIP"];
        $ad = $_POST["ad"];
        $typePoste = $_POST["typePoste"];
        $nSalle = $_POST["nSalle"];

        // enregistrement des donnees
        $ret = updateNomPoste($nPoste, $nomPoste);
        if ($ret) {
            $modifie = true;
        } else {
            $msg = "le poste n'a pas été modifié.";
        }
    }
 else {
    $msg="Veuillez renseigner tous les champs";    
    }
}


//appel fonction pour recup donnes utiles a l'affichage
$unPoste = getPostes();

if ($modifie) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Poste modifié";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueConfirmationModif.php";
    include "$racine/vue/pied.html.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Modifier un poste";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueModifier.php";
    include "$racine/vue/pied.html.php";
}
?>