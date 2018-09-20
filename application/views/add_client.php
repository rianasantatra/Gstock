<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3>Ajouter client</h3>
		</div>
		<form action="<?php echo site_url('paoma/add_client'); ?>" method="POST">
			
			<div class="form-group">
				<label for="">Nom *</label>
				<input type="text" class="form-control" name="clt_nom" required>
			</div>
			<div class="form-group">
				<label for="">Contact *</label>
				<input type="text" class="form-control" name="clt_contact" required>
			</div>
			<div class="form-group">
				<label for="">Adresse *</label>
                <input type="text" class="form-control" name="clt_adresse" required>
			</div>
            <div class="form-group">
				<label for="">Bureau *</label>
                <input type="text" class="form-control" name="clt_bureau" required>
			</div>

			<button type="submit" name="ajouter" value="ajouter" class="btn btn-primary">
				Ajouter
			</button>
		</form>
	</div>
</div>