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
                        Ajouter Articles
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo site_url('articles/add_POST'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-3 form-group">
                            <label>
                                Code
                            </label>
                            <input type="text" name="art_code" class="form-control">    
                            </div>
                            <div class="col-md-3 form-group">
                            <label>
                                Nom
                            </label>
                            <input type="text" name="art_nom" class="form-control">    
                            </div>
                            <div class="col-md-3 form-group">
                            <label>
                                Emplacement
                            </label>
                            <input type="text" name="art_emplacement" class="form-control">    
                            </div>
                            
                            <div class="col-md-3 form-group">
                                <label>
                                    Reference
                                </label>
                                <?php
                                $attributes = 'class = "form-control" id = "reference"';
                                echo form_dropdown('produits_id', $produits, set_value('reference'), $attributes);
                                ?>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Enregistrer
                        </button>
                        <a class="btn btn-warning" href="<?php echo site_url('applications/articles');?>">Retour</a>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    </body>
</html>