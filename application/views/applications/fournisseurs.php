<div class="page-header">
    <h3> <?php echo $title; ?> </h3>
</div>
<table class="table table-responsive" id="table">
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
        <?php foreach ($fournisseurs as $value) { ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->f_nom; ?></td>
                <td><?php echo $value->f_contact; ?></td>
                <td><?php echo $value->f_adresse; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="<?php echo site_url('fournisseurs/edit/'.$value->id)?>" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="<?php echo site_url('fournisseurs/delete/'.$value->id);?>" class="btn btn-danger" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
