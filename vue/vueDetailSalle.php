<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<h1><?= $unResto['nomSalle']; ?> </h1>

<!-- Infos salles -->
<h2 id="salle">
    Infos salle :
</h2>
<p>
Adresse Ip :    <?= $unResto['indIP']; ?>
<br />
Nombre de postes :    <?= $unResto['nbPoste']; ?>
</p>

<!-- Infos postes --->
<h2 id="poste">
    Infos poste :
</h2>

<?php for ($i = 0; $i < count($unPoste); $i++) { ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <span>
                    <p> Nom : <?= $unPoste[$i]["nomPoste"] ?> </p>
                </span>
                <span>
                    <p> Adresse IP : <?= $unPoste[$i]["indIP"] ?> </p>
                </span>
                <span>
                    <p> Administrateur : <?= $unPoste[$i]["ad"] ?> </p>
                </span>
                <br />
            </div>
        </div>
    </div>
<?php } ?>
