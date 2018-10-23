<div class="page-header">
    <h3> <?php echo $title; ?> </h3>
</div>

<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
    </div>
<?php } ?>
<a class="btn btn-primary" href="<?php echo site_url('produits/add') ?>">Ajouter</a>
<table class="table table-responsive" id="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Nom</th>
            <th class="hidden">Déscription</th>
            <th>Quantité</th>
            <th>Prix (Ar)</th>
            <th>Achat le</th>
            <th>En Stock</th>
            <th>Emplacements</th>
            <th>Fournisseurs</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produits as $value) { ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->p_code; ?></td>
                <td><?php echo $value->p_nom; ?></td>
                <td class="hidden"><?php echo $value->p_description; ?></td>
                <td><?php echo number_format($value->p_qte); ?></td>
                <td><?php echo number_format($value->p_pu); ?></td>
                <td><?php echo date("d.m.Y", strtotime($value->p_date_achat)); ?></td>
                <td><?php echo date("d.m.Y", strtotime($value->p_date_instock)); ?></td>
                <td><?php echo $value->mag_nom; ?></td>
                <td><?php echo $value->f_nom; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-info" href="<?php echo site_url('produits/edit/' . $value->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger" href="<?php echo site_url('produits/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="pagination">
    <?php echo $links; ?>
</div>