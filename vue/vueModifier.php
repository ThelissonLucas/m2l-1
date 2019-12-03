<h1> Modifier un poste </h1>

<h2> Listes des postes : </h2>

<?php for ($i = 0; $i < count($unPoste); $i++) { ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="./?action=modifier" method="POST">
                    <span>
                        <p> Nom actuel : <?= $unPoste[$i]["nomPoste"] ?> </p>
                        <input type="text" name="nomPoste" placeholder="Nouveau nom du poste"  /><br />
                    </span>

                    <span>
                            <p> Adresse IP actuelle : <?= $unPoste[$i]["indIP"] ?> </p>

                                <a> Selectionner la nouvelle Adresse IP :</a>
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
                    </span>

                    <span>
                        <p> Administrateur actuel : <?= $unPoste[$i]["ad"] ?> </p>
                            <a> Selectionner le nouvel adminstrateur :</a>
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
                    </span>

                    <span>
                        <p> Type poste actuel : <?= $unPoste[$i]["typePoste"] ?> </p>
                                <a> Selectionner le nouveau type Poste:</a>
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
                    </span>

                    <span>
                        <p> Num salle actuel : : <?= $unPoste[$i]["nSalle"] ?> </p>
                            <a> Selectionner la nouvelle salle ou sera installé le poste:</a>
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
                    </span>

                    <input type="submit" value="Modifier le poste" />
                </form>
                <br />
            </div>
        </div>
    </div>
<?php } ?>