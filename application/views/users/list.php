<div class="page-header">
    <h3> <?php echo $title; ?> </h3>
</div>
<a class="btn btn-primary" data-toggle="modal" data-target="#add">Ajouter</a>
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
        <?php foreach ($users as $value) {?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->username; ?></td>
                <td><?php echo $value->password; ?></td>
                <td><?php echo $value->function; ?></td>
                <td>
                    <a href="<?php echo site_url('users/edit/' . $value->id) ?>"><span class="glyphicon glyphicon-pencil"></span></a> | 
                    <a href="<?php echo site_url('users/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>

<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter utilisateur</h4>
            </div><!-- /.modal-header -->
            <div class="modal-body">
              <form class="form-horizental" action="<?php echo site_url('users/add'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Identifiant</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Fonction</label>
                        <input type="text" class="form-control" name="function">
                    </div>
                </div>

                </div><!-- /.modal-body -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div><!-- /.modal-footer -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
