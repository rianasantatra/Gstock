<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3> Nouveau Article </h3>
		</div>

		<form action="<?php echo site_url('paoma/add_article'); ?>" method="POST">
			<div class="row">
				<div class="col-md-4 form-group">
					<label for="">Code *</label>
					<input type="text" class="form-control" name="art_code" required>
				</div>
				<div class="col-md-4 form-group">
					<label for="">Nom *</label>
					<input type="text" class="form-control" name="art_nom" required>
				</div>
				<div class="col-md-4 form-group">
					<label for="">Déscription *</label>
					<input type="text" class="form-control" name="art_description" required>
				</div>
			</div>
			<div class="row">
			<div class="col-md-6 form-group">
					<label for="">Référence *</label>
					<select class="form-control" name="produits_id">
						<option value=""></option>
						<?php foreach ($produits as $row) {
							echo '<option value="' . $row -> id . '">' . $row -> p_nom . '</option>';
						}?>


					</select>
					<!--<?php echo form_dropdown('fournisseurs_id',$fournisseurs,'Fournisseurs','class="form-control"'); ?>-->
				</div>
				<div class="col-md-6 form-group">
					<label for="">Clients *</label>
					<select class="form-control" name="clients_id">
					<option value=""></option>
					<?php foreach ($clients as $clt) {
						echo '<option value="' . $clt -> id . '">' . $clt -> nom . '</option>';
					}?>+
					</select>
				</div>
			</div>

			<button type="submit" name="ajouter" value="ajouter"
			class="btn btn-primary">
				Ajouter
			</button>
		</form>
	</div>
</div>