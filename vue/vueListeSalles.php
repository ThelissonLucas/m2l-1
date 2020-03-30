<div class="container">
    </br>
    <h1>Liste des salles</h1>
    </br>
    <?php
    for ($i = 0; $i < count($listeSalles); $i++) {?>
        <div class="card">
            <div class="container">
                <div class="descrCard"><?php echo "<a href='./?action=detail&nSalle=" . $listeSalles[$i]['nSalle'] . "'>" . $listeSalles[$i]['nomSalle'] . "</a>"; ?>
                    <br />
                    <p>Nombre de postes : <?= $listeSalles[$i]["nbPoste"] ?></p>
                    <p>Adresse IP : <?= $listeSalles[$i]["indIP"] ?></p>
                </div>
            </div>
        </div>
        <br />

        <?php
    }
    ?>
</div>
