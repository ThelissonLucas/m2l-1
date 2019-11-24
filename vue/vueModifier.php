<h1> Modifier un poste </h1>

<h2> Listes des postes : </h2>

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