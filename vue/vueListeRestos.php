
<h1>Liste des salles</h1>

<?php
for ($i = 0; $i < count($listeRestos); $i++) {

//    $lesPhotos = getPhotosByIdR($listeRestos[$i]['idR']);
    ?>

    <div class="card">
        <!--<div class="photoCard">
            <?php if (count($lesPhotos) > 0) { ?>
                <img src="photos/<?= $lesPhotos[0]["cheminP"] ?>" alt="photo du restaurant" />
            <?php } ?>


        </div> -->
        <div class="descrCard"><?php echo "<a href='./?action=detail&nSalle=" . $listeRestos[$i]['nSalle'] . "'>" . $listeRestos[$i]['nomSalle'] . "</a>"; ?>
            <br />
          <p> Adresse IP : <?= $listeRestos[$i]["indIP"] ?> </p>
            <br />

          <p>  Nombre de postes : <?= $listeRestos[$i]["nbPoste"] ?> </p>
        </div>
    </div>





    <?php
}
?>


