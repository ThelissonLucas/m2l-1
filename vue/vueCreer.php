<h1> Creer un poste </h1>
<span id="alerte"><?= $msg ?></span>
<form action="./?action=creer" method="POST">

    <input type="text" name="nPoste" placeholder="Numéro de poste" /><br />
    
    <input type="text" name="nomPoste" placeholder="Nom du poste"  /><br />

    <a> Selectionner l'adresse IP :</a>
    <?php
    $result = getIps();?>
    <select name="indIP">"
    <?php
    for($e = 0; $e < count($result);$e++)
    {
        echo "<option value=" .$result[$e]['indIP'] . ">" .$result[$e]['indIP']. "</option>" ;
    }
    echo "</select>"; ?>
    <br />

    <a> Selectionner l'administrateur :</a>
    <?php
    $result = getAds();?>
    <select name="ad">"
    <?php
    for($e = 0; $e < count($result);$e++)
    {
        echo "<option value=" .$result[$e]['ad'] . ">" .$result[$e]['ad']. "</option>" ;
    }
    echo "</select>"; ?>
    <br />


    <a> Selectionner le type Poste:</a>
    <?php
    $result = getTypes();?>
    <select name="typePoste">"
    <?php
    for($e = 0; $e < count($result);$e++)
    {
        echo "<option value=" .$result[$e]['typePoste'] . ">" .$result[$e]['typePoste']. "</option>" ;
    }
    echo "</select>"; ?>
    <br />
    
    <a> Selectionner la salle ou sera installé le poste:</a>
    <?php
    $result = getNumSalles();?>
    <select name="nSalle">"
    <?php
    for($e = 0; $e < count($result);$e++)
    {
        echo "<option value=" .$result[$e]['nSalle'] . ">" .$result[$e]['nSalle']. "</option>" ;
    }
    echo "</select>"; ?>
    <br />

    <input type="submit" value="Creer un nouveau poste" />

</form>