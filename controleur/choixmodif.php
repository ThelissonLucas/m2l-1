<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.salle.inc.php";
include_once "$racine/modele/authentification.inc.php";
?>
<?php
//recup des donnees en POST
  if($_POST['nPoste'] != "") {
    $nPoste=$_POST["nPoste"];
    
   }
   else{
     $nPoste="";

   }
?>
<?php
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$lesPostes = getPostes();
$info = getInfosPoste($nPoste);

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Modification de la salle d'un poste";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueAdminPoste.php";
include "$racine/vue/pied.html.php";
?>