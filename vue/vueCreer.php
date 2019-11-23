<h1> Creer un poste </h1>
<span id="alerte"><?= $msg ?></span>
<form action="./?action=creer" method="POST">

    <input type="text" name="nPoste" placeholder="Numéro de poste" /><br />
    <input type="text" name="nomPoste" placeholder="Nom du poste"  /><br />
    <input type="text" name="indIP" placeholder="Adresse Ip" /><br />
    <input type="text" name="ad" placeholder="ad" /><br />
    <input type="text" name="typePoste" placeholder="Type poste" /><br />
    <input type="text" name="nSalle" placeholder="Numéro de salle" /><br />


    <input type="submit" value="Creer un nouveau poste" />

</form>