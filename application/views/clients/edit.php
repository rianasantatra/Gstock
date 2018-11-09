<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>
            Gestion de stock
        </title>
        <link href="<?php echo site_url(); ?>assets/css/app.css" rel="stylesheet">
        </meta>
        </meta>
        </meta>
        <style type="text/css">
            body{
                margin-top: 60px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Editer Articles
                    </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizental" action="<?php echo site_url('clients/edit_POST'); ?>" method="POST">
    <div class="row">
        <input type="hidden" class="form-control" name="id" value="<?php echo $data[0]->id; ?>">
        <div class="col-md-12 form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="clt_nom" value="<?php echo $data[0]->clt_nom; ?>">
        </div>
        <div class="col-md-12 form-group">
            <label>Contact</label>
            <input type="number" class="form-control" name="clt_contact" value="<?php echo $data[0]->clt_contact; ?>">
        </div>
        <div class="col-md-12 form-group">
            <label>Adresse</label>
            <input type="text" class="form-control" name="clt_adresse" value="<?php echo $data[0]->clt_adresse; ?>">
        </div>
        <div class="col-md-12 form-group">
            <label>Bureau</label>
            <input type="text" class="form-control" name="clt_bureau" value="<?php echo $data[0]->clt_bureau; ?>">
        </div>
        <div class="col-md-12 form-group">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
            <a class="btn btn-warning" href="<?php echo site_url('applications/clients'); ?>">Retour</a>
        </div>
    </div>
</form>
</div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    </body>
</html>