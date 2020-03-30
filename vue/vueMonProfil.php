<div class="container">
    </br>
	<h1>Mon profil</h1>

	Mon adresse électronique : <?= $util["email"] ?> <br />
	Mon pseudo : <?= $util["name"] ?> <br /><br>
	<?php
		$level = getLevelByMail($util["email"]);
		if($level['level'] == 2){ ?>
			<strong>Gestion des postes :</strong><br>
			<a href="./?action=creation">Créer </a><br>
            <a href="./?action=suppression">Supprimer</a><br>
			<a href="./?action=modification">Modifier</a>
	<?php
		}?>

	<hr>
	<a href="./?action=deconnexion">Se déconnecter</a>
</div>

