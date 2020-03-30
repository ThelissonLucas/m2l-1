<div class="container">
    </br>
    <h1>Recherche d'une salle</h1>
    <form action="./?action=recherche&critere=<?= $critere ?>" method="POST">


        <?php
        switch ($critere) {
            case "nom":
                ?>
                Recherche par nom : <br />
                <input type="text" name="nom" placeholder="nom" value="<?= $nomSalle ?>" /><br />
                <?php
                break;
            case "adresse":
                ?>
                Recherche par adresse IP : <br />
                <input type="text" name="adresse" placeholder="adresse IP" value="<?= $indIP ?>"/><br />
        <?php
            break;
                    }
        ?>
        <br />
        <button type="submit" value="submit" class="btn btn-dark">Rechercher</button>

    </form>
</div>