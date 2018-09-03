<div class="container">
	<form class="form-signin" action="<?php echo site_url('paoma/update_user'); ?>" method="POST">
		<div class="form-group">
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data[0] -> id; ?>">
			<label for="username">Identifiant</label>
			<input type="text" class="form-control" id="username" name="username" value="<?php echo $data[0] -> username; ?>" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" value="<?php echo $data[0] -> password; ?>" required>
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

		<button type="submit" class="btn btn-primary btn-block" name="modifier" value="modifier" onclick="return(confirm('Confirmer modification?'))">
			Modifier
		</button>
	</form>
</div>