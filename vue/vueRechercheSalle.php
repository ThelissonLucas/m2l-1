
<h1>Recherche d'une salle</h1>
<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">


    <?php
    switch ($critere) {
        case "nom":
            ?>
            Recherche par nom : <br />
            <input type="text" name="nomSalle" placeholder="nom" value="<?= $nomSalle ?>" /><br />
            <?php
            break;
        case "adresse":
            ?>
    }
    ?>
    <br /><br />
    <input type="submit" value="Rechercher" />
</form>
