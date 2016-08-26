

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-condensed table-striped">
                <tr>
                    <th>#</th>
                    <th>Nom province</th>
                </tr>

                <?php foreach ($provinces as $province) { ?>
                    <tr>
                        <td><a href="?v=update&c=province&id=<?php echo $province->getId_province();?>">Modifier</a></td>
                        <td><?php echo $province->getNom_province();?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>