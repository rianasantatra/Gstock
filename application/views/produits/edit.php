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
        <style type="text/css">
            body{margin-top: 60px;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Update produits
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo site_url('produits/edit_POST'); ?>" method="POST">
                        <div class="row">
                        	<input class="form-control" name="id" type="hidden" value="<?php echo $data[0]->id;?>">
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Code
                                </label>
                                <input class="form-control" name="p_code" type="text" value="<?php echo $data[0]->p_code;?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Nom
                                </label>
                                <input class="form-control" name="p_nom" type="text" value="<?php echo $data[0]->p_nom;?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Déscription
                                </label>
                                <?php echo $this->ckeditor->editor("p_description");?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="">
                                    Nombre
                                </label>
                                <input class="form-control" name="p_qte" type="text" value="<?php echo $data[0]->p_qte;?>">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="">
                                    Prix Unitaire (Ar)
                                </label>
                                <input class="form-control" name="p_pu" type="text" value="<?php echo $data[0]->p_pu;?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Date Achat
                                </label>
                                <input class="form-control" name="p_date_achat" type="date" value="<?php echo $data[0]->p_date_achat;?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">
                                    Entrée en stock
                                </label>
                                <input class="form-control" name="p_date_instock" type="date" value="<?php echo $data[0]->p_date_instock;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>
                                    Emplacement
                                </label>
                                <?php
                                $attributes = 'class = "form-control" id = "magasins"';
                                echo form_dropdown('magasins_id', $magasins, set_value('magasins'), $attributes);
                                ?>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>
                                    Fournisseurs
                                </label>
                                <?php
                                $attributes = 'class = "form-control" id = "fournisseurs"';
                                echo form_dropdown('fournisseurs_id', $fournisseurs, set_value('fournisseurs'), $attributes);
                                ?>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Enregistrer
                        </button>
                        <a class="btn btn-warning" href="<?php echo site_url('applications/produits');?>">Retour</a>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    </body>
</html>