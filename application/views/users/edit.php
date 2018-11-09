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
                        Editer utilisateur
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo site_url('users/edits'); ?>" method="POST">
                        <div class="row">
                            <input class="form-control" name="id" type="hidden" value="<?php echo $data[0]->id; ?>">
                            <div class="col-md-12 form-group">
                                <label for="">
                                    Identifiant
                                </label>
                                <input class="form-control" name="username" type="text" value="<?php echo $data[0]->username; ?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">
                                    Mot de passe
                                </label>
                                <input class="form-control" name="password" type="password" value="<?php echo $data[0]->password; ?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">
                                    Fonction
                                </label>
                                <input class="form-control" name="function" type="text" value="<?php echo $data[0]->function; ?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="btn btn-primary" type="submit">
                                Enregistrer
                                </button>
                                <a class="btn btn-warning" href="<?php echo site_url('applications/users'); ?>">Retour</a>
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