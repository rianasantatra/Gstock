<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestion Stock</title>

		<link rel="stylesheet" href="<?php echo css_url('app'); ?>">
		<link rel="stylesheet" href="<?php echo css_url('css'); ?>">

	</head>

	<body>
	<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<form action="<?php echo site_url('paoma/login')?>" method="post">
			<h2>Login</h2>
			<hr />
			<?php if ($this->session->flashdata()) {
			?>
			<div class="alert alert-warning">
				<?= $this -> session -> flashdata('msg'); ?>
			</div>
			<?php } ?>
			<div class="form-group">
				<label for="identifiant">Identifiant</label>
				<input type="text" class="form-control" name="username"  id="username" required>
			</div>
			<div class="form-group">
				<label for="pwd">Mot de passe</label>
				<input type="password" class="form-control" name="password"  id="password" required>
			</div>
			<button type="submit" class="btn btn-primary">
				Login
			</button>
		</form>
	</div>
	<script src="<?php echo js_url('jquery'); ?>"></script>
	<script src="<?php echo js_url('app'); ?>"></script>
	</body>
</html>

</div>