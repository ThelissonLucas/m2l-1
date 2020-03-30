<div class="container">
    </br>
    <h1>Création</h1>
    <form action="./?action=creation" method="POST">
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Numéro de poste</label>
                        <input type="text" name="nPoste" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nom poste</label>
                        <input type="text" name="nomPoste" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Choisir le segment</label>
                        <select cols='100' rows='10' class="form-control" name="indIP">
                            <option></option>
                            <?php
                                for ($i = 0; $i < count($lesSegments); $i++) {?>
                                    <option value="<?php echo $lesSegments[$i]['indIP']; ?>"><?php echo $lesSegments[$i]['nomSegment'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Choisir le type de poste</label>
                        <select cols='100' rows='10' class="form-control" name="typePoste">
                            <option></option>
                            <?php
                                for ($i = 0; $i < count($lesTypes); $i++) {?>
                                    <option value="<?php echo $lesTypes[$i]['typeLP']; ?>"><?php echo $lesTypes[$i]['nomType'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Choisir la salle</label>
                        <select cols='100' rows='10' class="form-control" name="nSalle">
                            <option></option>
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
                    <button type="submit" value="submit" class="btn btn-dark">Créer</button>
                </div>
            </div>
        </div>
    </form>
</div>