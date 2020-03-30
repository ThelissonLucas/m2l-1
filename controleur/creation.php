<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.salle.inc.php";
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nPoste"]) && isset($_POST["nomPoste"]) && isset($_POST["typePoste"]) && isset($_POST["nSalle"])){
    $nPoste=$_POST["nPoste"];
    $nomPoste=$_POST["nomPoste"];
    $typePoste=$_POST["typePoste"];
    $nSalle=$_POST["nSalle"];

    // traitement si necessaire des donnees recuperees
    creerPoste($nomPoste, $typePoste, $nSalle, $nPoste);
    ?>
    <div class="alert alert-success">Poste créé !</div>
<?php
}
else
{
    $nPoste="";
    $nomPoste="";
    $typePoste="";
    $nSalle="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
$lesSegments = getSegments();
$lesTypes = getTypes();
$lesSalles = getSalles();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Création d'un poste";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCreation.php";
include "$racine/vue/pied.html.php";
?>