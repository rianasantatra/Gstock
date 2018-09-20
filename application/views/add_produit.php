<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3> Nouveau produit </h3>
		</div>

		<form action="<?php echo site_url('paoma/add_produit'); ?>" method="POST">
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="">Code *</label>
					<input type="text" class="form-control" name="p_code" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Nom *</label>
					<input type="text" class="form-control" name="p_nom" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Référence *</label>
					<input type="text" class="form-control" name="p_ref" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Déscription *</label>
					<input type="text" class="form-control" name="p_description" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="">Nombre *</label>
					<input type="text" class="form-control" name="p_qte" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Prix Unitaire *</label>
					<input type="text" class="form-control" name="p_pu" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Date Achat *</label>
					<input type="date" class="form-control" name="p_date_achat" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Entrée en stock *</label>
					<input type="date" class="form-control" name="p_date_instock" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="">Magasin *</label>
					<select class="form-control" name="magasins_id">
					<option value=""></option>
					<?php foreach ($magasin as $m) {
						echo '<option value="' . $m -> id . '">' . $m -> nom . '</option>';
					}?>
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label for="">Fournisseur *</label>
					<select class="form-control" name="fournisseurs_id">
						<option value=""></option>
						<?php foreach ($fournisseurs as $row) {
							echo '<option value="' . $row -> id . '">' . $row -> nom . '</option>';
						}?>
					</select>
					<!--<?php echo form_dropdown('fournisseurs_id',$fournisseurs,'Fournisseurs','class="form-control"'); ?>-->
				</div>
			</div>

			<button type="submit" name="ajouter" value="ajouter"
			class="btn btn-primary">
				Ajouter
			</button>
		</form>
	</div>
</div>