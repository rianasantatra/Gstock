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
                        Update Fournisseurs
                    </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizental" action="<?php echo site_url('fournisseurs/edit_POST') ?>" method="POST">
                        <div class="row">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data[0]->id;?>">
                            <div class="col-md-12 form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="f_nom" value="<?php echo $data[0]->f_nom;?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="f_contact" value="<?php echo $data[0]->f_contact;?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Adresse</label>
                                <input type="text" class="form-control" name="f_adresse" value="<?php echo $data[0]->f_adresse;?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="btn btn-primary" type="submit">
                                    Enregistrer
                                </button>
                                <a href="<?php echo site_url('applications/fournisseurs');?>" class="btn btn-warning">Retour</a>
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