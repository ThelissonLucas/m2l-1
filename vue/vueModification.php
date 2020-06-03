<div class="container">
    </br>
    <h1>Modification</h1>
    <form action="./?action=modification" method="POST">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Numéro de poste</label>
                    <input type="text" name="nPoste" class="form-control" value="<?php echo $infos[0]['nPoste']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nom poste</label>
                    <input type="text" name="nomPoste" class="form-control" value="<?php echo $infos[0]['nomPoste']; ?>">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Choisir le type de poste</label>
                    <select cols='100' rows='10' class="form-control" name="typePoste">
                        <option value="<?php echo $infos[0]['typePoste']; ?>"><?php echo $infos[0]['typePoste']; ?></option>
                        <?php
                            for ($i = 0; $i < count($lesTypes); $i++) {?>
                                <option value="<?php echo $lesTypes[$i]['typeLP']; ?>"><?php echo $lesTypes[$i]['nomType'];?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Choisir la salle</label>
                    <select cols='100' rows='10' class="form-control" name="nSalle">
                        <option value="<?php echo $infos[0]['nSalle']; ?>"><?php echo $infos[0]['nomSalle']; ?></option>
                        <?php
                            for ($i = 0; $i < count($lesSalles); $i++) {?>
                            { ?>  
                                <option value="<?php echo $lesSalles[$i]['nSalle']; ?>"><?php echo $lesSalles[$i]['nomSalle'];?></option>
                        <?php
                            } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Administrateur</label>
                    <input type="text" name="ad" class="form-control" value="<?php echo $infos[0]['ad']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <button type="submit" value="submit" class="btn btn-dark">Modifier</button>
            </div>
        </div>
    </form>
</div>