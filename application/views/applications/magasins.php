<div class="page-header">
    <h3> <?php echo $title; ?> </h3>
</div>
<table class="table table-responsive"  id="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Contact</th>
            <th>Adresse</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($magasins as $value) { ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->mag_nom; ?></td>
                <td><?php echo $value->mag_contact; ?></td>
                <td><?php echo $value->mag_adresse; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-info" href="<?php echo site_url('magasins/edit/' . $value->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger" href="<?php echo site_url('magasins/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
