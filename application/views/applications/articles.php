<div class="page-header">
    <h3>
        <?php echo $title; ?>
    </h3>
</div>
<?php if ($this->session->flashdata('success')) {?>
    <div class="alert alert-success">
        <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
    </div>
<?php }?>

<a href="<?php echo site_url('articles/add') ?>" class="btn btn-primary">Ajouter</a>

<table class="table table-responsive" id="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Nom</th>
            <th>Reference</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $value) {?>
            <tr>
                <td>
                    <?php echo $value->id; ?>
                </td>
                <td>
                    <?php echo $value->art_code; ?>
                </td>
                <td>
                    <?php echo $value->art_nom; ?>
                </td>
                <td>
                    <?php echo $value->art_emplacement; ?>
                </td>
                <td>
                    <?php echo $value->produits_id; ?>
                </td>
                <td>
                    <a href="<?php echo site_url('articles/edit/' . $value->id) ?>"><span class="glyphicon glyphicon-pencil"></span></a> | <a href="<?php echo site_url('articles/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>
