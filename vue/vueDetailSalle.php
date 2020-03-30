<div class="container">
    <form action="modification.php">
        </br>
        <h1><?= $uneSalle['nomSalle']; ?></h1>

        <p id="principal">
            Salle au 1er étage
        </p>
        <h2>
            Informations
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <p>
                        Nom : <?= $uneSalle['nomSalle']; ?><br />
                        Nombre de postes : <?= count($unPoste); ?><br />
                        IP : <?= $uneSalle['indIP']; ?>
                    </p>
                </div>
            </div>
        </div>

        <h2 id="postes">
            Postes dans cette salle
        </h2>
        </br>

        <?php for ($i = 0; $i < count($unPoste); $i++) { ?>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="container">
                                <p> Nom : <?= $unPoste[$i]["nomPoste"] ?> </p>
                                <p> Adresse IP : <?= $unPoste[$i]["indIP"] ?> </p>
                                <p> Administrateur : <?= $unPoste[$i]["ad"] ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </br>
        <?php } ?>
    </form>
</div>