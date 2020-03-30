<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.salle.inc.php";


// critere de recherche par defaut
$critere = "nom";
if (isset($_GET["critere"])) {
    $critere = $_GET["critere"];
}

// recuperation des donnees GET, POST, et SESSION
if (isset($_GET["critere"])){
    $critere = $_GET["critere"];
}
$nomSalle="";
if (isset($_POST["nomSalle"])){
    $nomSalle = $_POST["nomSalle"];
}
$indIP = array();
if(isset($_POST["indIP"])){
    $indIP = $_POST["indIP"];
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

switch($critere){
    case 'nom':
        // recherche par nom
        $listeSalles = getSallesByNom($nomSalle);
        break;
    case 'adresse':
        // recherche par adresse
        $listeSalles = getSallesByAdresse($indIP);
        break;    
}

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Recherche d'une salle";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueRechercheSalle.php";
if (!empty($_POST)) {
    // affichage des resultats de la recherche
    include "$racine/vue/vueResultRecherche.php";
}
include "$racine/vue/pied.html.php";


?>