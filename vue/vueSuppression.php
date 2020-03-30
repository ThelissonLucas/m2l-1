<div class="container">
    </br>
    <h1>Suppression d'un poste</h1>
    <form action="./?action=suppression" method="POST">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Choisir le poste</label>
                    <select cols='100' rows='10' class="form-control" name="nPoste">
                        <option></option>
                        <?php
                            for ($i = 0; $i < count($lesPostes); $i++) {?>
                            { ?>  
                                <option value="<?php echo $lesPostes[$i]['nPoste']; ?>"><?php echo $lesPostes[$i]['nomPoste'];?></option>
                        <?php
                            } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button type="submit" value="submit" class="btn btn-dark">Supprimer</button>
            </div>
        </div>
    </form>
</div>