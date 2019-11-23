<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}




// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Supprimer une salle";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueSupprimer.php";
include "$racine/vue/pied.html.php";
?>