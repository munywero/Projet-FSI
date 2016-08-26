
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="">
                <input type="hidden" name="id_province" value="<?php echo $province->getId_province(); ?>"/>
                <div class="form-group">
                    <label></label>
                    <input class="form-control" type="text" name="nom_province" value="<?php echo $province->getNom_province();?>"/>
                </div>
                 <div class="form-group">
                     <button class="btn btn-default">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>