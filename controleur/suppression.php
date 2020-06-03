<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__){
    $racine = "..";
}
include_once "$racine/modele/bd.salle.inc.php";
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nPoste"])){
    $nPoste=$_POST["nPoste"];
    // traitement si necessaire des donnees recuperees
    supprimerPoste($nPoste);
    ?>
    <div style="position:relative;" class="alert alert-success">Poste supprimé !</div>
<?php
}
else
{
    $nPoste="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$lesPostes = getPostes();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Suppression de la salle d'un poste";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueSuppression.php";
include "$racine/vue/pied.html.php";
?>