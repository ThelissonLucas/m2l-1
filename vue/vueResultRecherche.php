<div class="container">
    </br>
	<h1>Liste des salles</h1>

	<?php
	for ($i = 0; $i < count($listeSalles); $i++) {
	    ?>

	    <div class="card">
	    	<div class="container">
		        <div class="descrCard"><?php echo "<a href='./?action=detail&n=" . $listeSalles[$i]['nSalle'] . "'>" . $listeSalles[$i]['nomSalle'] . "</a>"; ?>
		            <br />
		            Nombre de postes : <?= $listeSalles[$i]["nbPoste"] ?><br />
		            IP : <?= $listeSalles[$i]["indIP"] ?>
		        </div>
	   		</div>
	    </div>
	    <br />
	<?php
	    }
	?>
</div>


