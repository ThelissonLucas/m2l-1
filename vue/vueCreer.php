<h1> Creer une salle </h1>
<span id="alerte"><?= $msg ?></span>
<form action="./?action=creer" method="POST">

    <input type="text" name="nSalle" placeholder="Numéro de salle" /><br />
    <input type="text" name="nomSalle" placeholder="Nom de la salle"  /><br />
    <input type="text" name="nbPoste" placeholder="Nombre de postes" /><br />
    <input type="text" name="indIP" placeholder="Adresse Ip" /><br />


    <input type="submit" value="Creer une salle" />

</form>