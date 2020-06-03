<div class="container">
    </br>
    
    <?php
    if(isLoggedOn()){ ?>
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
    }
    else{?>
        <h1>Maison des ligues</h1>
        </br>
        <div class="card">
            <div class="container">
                <br>
                <p>Bienvenue sur le site de Gestion du Parc Informatique de la <a href="https://m2l-france.com/">Maison des Ligues</a>.<br><br>Pour plus d'informations, veuillez vous connecter.</p>
            </div>
        </div>
    <?php
    }
    ?>
</div>
