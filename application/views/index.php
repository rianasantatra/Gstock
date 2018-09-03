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

</div>