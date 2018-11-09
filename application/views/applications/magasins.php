<div class="page-header">
    <h3> <?php echo $title; ?> </h3>
</div>
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter</button>
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
        <?php foreach ($magasins as $value) {?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->mag_nom; ?></td>
                <td><?php echo $value->mag_contact; ?></td>
                <td><?php echo $value->mag_adresse; ?></td>
                <td>
                    <a href="<?php echo site_url('magasins/edit/' . $value->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a> | <a href="<?php echo site_url('magasins/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouveau Fournisseur</h4>
      </div>
      <div class="modal-body">
            <form action="<?php echo site_url('magasins/add'); ?>" method="POST">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="mag_nom">
                </div>
                <div class="col-md-12 form-group">
                    <label>Contact</label>
                    <input type="number" class="form-control" name="mag_contact">
                </div>
                <div class="col-md-12 form-group">
                    <label>Adresse</label>
                    <input type="text" class="form-control" name="mag_adresse">
                </div>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
            </form>
    </div>
  </div>
</div>