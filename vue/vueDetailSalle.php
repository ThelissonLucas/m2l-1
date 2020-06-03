<div class="container">
    </br>
    <h1><?= $uneSalle['nomSalle']; ?></h1>

    <p id="principal">
        Salle au <?= $uneSalle['nomSegment']; ?>
    </p>
    <h2>
        Informations
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <p>
                    Nom : <?= $uneSalle['nomSalle']; ?><br />
                    Nombre de postes : <?= $uneSalle['nombrePoste']; ?><br />
                    IP : <?= $uneSalle['indIP']; ?>
                </p>
            </div>
        </div>
    </div>

    <h2 id="postes">
        Postes dans cette salle
    </h2>
    </br>

    <?php
        if($uneSalle['nombrePoste'] != 0){
            for ($i = 0; $i < count($unPoste); $i++) { ?>
                <div class="container">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="container">
                                    <p> Nom : <?= $unPoste[$i]["nomPoste"] ?> </p>
                                    <p> Adresse IP : <?= $unPoste[$i]["indIP"] ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br>
    <?php
            }
        }
    ?>
</div>