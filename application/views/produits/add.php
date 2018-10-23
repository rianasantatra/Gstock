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
        <link href="<?php echo base_url(); ?>assets/ckeditor/contents.css" rel="stylesheet">
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
                        Nouveau produits
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo site_url('produits/add_POST'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Code
                                </label>
                                <input class="form-control" name="p_code" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Nom
                                </label>
                                <input class="form-control" name="p_nom" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Déscription
                                </label>
                                <?php echo $this->ckeditor->editor("p_description"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="">
                                    Nombre
                                </label>
                                <input class="form-control" name="p_qte" type="text">
                                </input>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="">
                                    Prix Unitaire (Ar)
                                </label>
                                <input class="form-control" name="p_pu" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Date Achat
                                </label>
                                <input class="form-control" name="p_date_achat" type="date">
                                </input>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Entrée en stock
                                </label>
                                <input class="form-control" name="p_date_instock" type="date">
                                </input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>
                                    Emplacement :
                                </label>
                                <a class="pull-right" data-toggle="modal" href="#magasin">
                                    Nouveau
                                </a>
                                <?php
                                $attributes = 'class = "form-control" id = "magasins"';
                                echo form_dropdown('magasins_id', $magasins, set_value('magasins'), $attributes);
                                ?>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>
                                    fournisseurs :
                                </label>
                                <a class="pull-right" data-toggle="modal" href="#fournisseur">
                                    Nouveau
                                </a>
                                <?php
                                $attributes = 'class = "form-control" id = "fournisseurs"';
                                echo form_dropdown('fournisseurs_id', $fournisseurs, set_value('fournisseurs'), $attributes);
                                ?>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Enregistrer
                        </button>
                        <a class="btn btn-warning" href="<?php echo site_url('applications/produits'); ?>">Retour</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="magasin">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title">
                            Nouveau Magasin
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizental" action="<?php echo site_url('magasins/add_POST') ?>" method="POST">
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
                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" type="submit">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Fermer</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="fournisseur">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title">
                            Nouveau Fournisseur
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizental" action="<?php echo site_url('fournisseurs/add_POST') ?>" method="POST">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="f_nom">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Contact</label>
                                    <input type="number" class="form-control" name="f_contact">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" name="f_adresse">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" type="submit">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Fermer</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    </body>
</html>