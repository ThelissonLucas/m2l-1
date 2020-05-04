<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__){
    $racine = "..";
}
include_once "$racine/modele/bd.salle.inc.php";
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if ($_POST["mailU"] != "" && $_POST["mdpU"] != "" && $_POST["nomU"] != ""){
    $mailU=$_POST["mailU"];
    $mdpU=$_POST["mdpU"];
    $nomU=$_POST["nomU"];
    // traitement si necessaire des donnees recuperees
	register($nomU,$mailU,$mdpU);
	?>
	<div class="alert alert-success">Inscription validée!</div>
<?php
}
else
{
    $mailU="";
    $mdpU="";
    $nomU="";
}
// l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
// appel du script de vue 
$titre = "inscription";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueInscription.php";
include "$racine/vue/pied.html.php";

?>