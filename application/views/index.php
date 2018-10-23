<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestion de stock</title>
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/app.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/css.css">
</head>
<body id="login">

<div class="container">
	<?php echo $this->session->flashdata('msg');?>
	<form class="form-signin" action="<?php echo site_url('users/login'); ?>" method="post">
        <label class="sr-only">Identifint</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Identifiant" required>
        <label class="sr-only">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>

</body>
</html>
