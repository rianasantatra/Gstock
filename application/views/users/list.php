<div class="page-header">
    <h3> <?php echo $title; ?> </h3>
</div>
<table class="table table-responsive" id="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Identifiant</th>
            <th>Mot  de passe</th>
            <th>Fonction</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $value) { ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->username; ?></td>
                <td><?php echo $value->password; ?></td>
                <td><?php echo $value->fonction; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="<?php echo site_url('users/edit/' . $value->id) ?>" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="<?php echo site_url('users/delete/' . $value->id); ?>" class="btn btn-danger" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

