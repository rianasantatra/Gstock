<div class="page-header">
    <h3> <?php echo $title; ?> </h3>
</div>

<?php if ($this->session->flashdata('success')) {?>
    <div class="alert alert-success">
        <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
    </div>
<?php }?>
<div class="btn-group">
    <a class="btn btn-primary" href="<?php echo site_url('produits/add') ?>">Entree</a>
    <a class="btn btn-info" data-toggle="modal" data-target="#sortie">Sortie</a>
</div>

<table class="table table-responsive" id="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Nom</th>
            <th>Déscription</th>
            <th>Quantité</th>
            <th>Prix(Ar)</th>
            <th>Achat le</th>
            <th>En Stock</th>
            <th>Emplacements</th>
            <th>Fournisseurs</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produits as $value) {?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->p_code; ?></td>
                <td><?php echo $value->p_nom; ?></td>
                <td><?php echo $value->p_description; ?></td>
                <td><?php echo number_format($value->p_qte); ?></td>
                <td><?php echo number_format($value->p_pu); ?></td>
                <td><?php echo date("d.m.Y", strtotime($value->p_date_achat)); ?></td>
                <td><?php echo date("d.m.Y", strtotime($value->p_date_instock)); ?></td>
                <td><?php echo $value->mag_nom; ?></td>
                <td><?php echo $value->f_nom; ?></td>
                <td>
                        <a href="<?php echo site_url('produits/edit/' . $value->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a> | <a href="<?php echo site_url('produits/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>

<div class="pagination">
    <?php echo $links; ?>
</div>

<div class="modal fade" id="sortie">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sortie Produits</h4>
            </div><!-- /.modal-header -->
            <form class="form-horizontal" action="<?php echo site_url(''); ?>" method="POST">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>Nombre voulu</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label>Destination</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label>Reference</label>
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
            </div><!-- /.modal-body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->