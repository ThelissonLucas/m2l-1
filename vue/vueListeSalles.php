<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <div class="container">
        <div class="row">
            <h1>Liste des salles</h1>

            <?php
            for ($i = 0; $i < count($listeSalles); $i++) {

            //    $lesPhotos = getPhotosByIdR($listeRestos[$i]['idR']);
                ?>

                <div class="card">
                    <!--<div class="photoCard">
                        <?php if (count($lesPhotos) > 0) { ?>
                            <img src="photos/<?= $lesPhotos[0]["cheminP"] ?>" alt="photo du restaurant" />
                        <?php } ?>


                    </div> -->
                    <div class="descrCard"><?php echo "<a href='./?action=detail&nSalle=" . $listeSalles[$i]['nSalle'] . "'>" . $listeSalles[$i]['nomSalle'] . "</a>"; ?>
                        <br />
                    <p> Adresse IP : <?= $listeSalles[$i]["indIP"] ?> </p>
                        <br />

                    <p>  Nombre de postes : <?= $listeSalles[$i]["nbPoste"] ?> </p>
                    </div>
                </div>





                <?php
            }
            ?>
        <div>
    </div>
</body>

