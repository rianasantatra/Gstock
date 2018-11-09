<div class="page-header">
<h3> <?php echo $title; ?> </h3>
</div>

<a class="btn btn-primary" data-toggle="modal" data-target="#add">Ajouter</a>

<table class="table table-responsive" id="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Nom</th>
      <th>Contact</th>
      <th>Adresse</th>
      <th>Bureau</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($clients as $value) {?>
    <tr>
      <td><?php echo $value->id; ?></td>
      <td><?php echo $value->clt_nom; ?></td>
      <td><?php echo $value->clt_contact; ?></td>
      <td><?php echo $value->clt_adresse; ?></td>
      <td><?php echo $value->clt_bureau; ?></td>
      <td>
        <a href="<?php echo site_url('clients/edit/' . $value->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a> | 
        <a href="<?php echo site_url('clients/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
      </td>
    </tr>
  <?php }?>
  </tbody>
</table>

<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter clients</h4>
            </div><!-- /.modal-header -->
            <div class="modal-body">
              <form class="form-horizental" action="<?php echo site_url('clients/add_POST'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="clt_nom">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Contact</label>
                        <input type="number" class="form-control" name="clt_contact">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" name="clt_adresse">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Bureau</label>
                        <input type="text" class="form-control" name="clt_bureau">
                    </div>
                    <div class="col-md-12 form-group">
                        <button class="btn btn-primary" type="submit">
                            Enregistrer
                        </button>
                    </div>
                </div>
                </form>
            </div><!-- /.modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
