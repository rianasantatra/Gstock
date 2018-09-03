<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">

		<div class="page-header">
			<h3><span class="glyphicon glyphicon-user"></span> Ajouter utilisateur</h3>
		</div>
		<form class="form-signin" action="<?php echo site_url('paoma/add_user'); ?>" method="POST">
			
			<div class="form-group">
				<label for="username">Identifiant</label>
				<input type="text" class="form-control" id="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
				<label for="fonction">Fonction</label>
				<select class="form-control" name="fonction">
					<option ></option>
					<option value="admin">Administrer</option>
					<option value="editor">Editer</option>
					<option value="viewer">Regarder</option>
				</select>
			</div>

			<button type="submit" name="ajouter" value="ajouter" class="btn btn-primary">
				Ajouter
			</button>
		</form>
	</div>
</div>