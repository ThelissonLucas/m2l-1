<div class="container">
    </br>
    <h1> Choix du poste </h1>
    <form action="./?action=choixmodif" method="POST">
        <div class="content">
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
        </div>

        <div class="row">
                <div class="col-md-3">
                <a href="./?action=modification" class="btn btn-dark" type="submit">Choisir le poste a modifier</a>
                </div>
        </div>                                
    </form>


</div>