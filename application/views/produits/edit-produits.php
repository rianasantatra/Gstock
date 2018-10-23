<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3>Update produits </h3>
		</div>

		<form action="<?php echo site_url('paoma/edit_produitsPOST'); ?>" method="POST">
	<input type="hidden" value="<?php echo $produits[0]->id ?>"   name="id">
						<div class="row">
							<div class="col-md-2 form-group">
								<label for="">Code </label>
								<input type="text" class="form-control" name="p_code"  value="<?php echo $produits[0]->p_code ?>">
							</div>
							<div class="col-md-2 form-group">
								<label for="">Nom </label>
								<input type="text" class="form-control" name="p_nom"  value="<?php echo $produits[0]->p_nom ?>">
							</div>
							<div class="col-md-2 form-group">
								<label for="">Référence </label>
								<input type="text" class="form-control" name="p_ref"  value="<?php echo $produits[0]->p_ref?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="">Déscription </label>
								<textarea name="p_description" class="form-control" value="<?php echo $produits[0]->p_description?>"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group">
								<label for="">Nombre </label>
								<input type="text" class="form-control" name="p_qte" value="<?php echo $produits[0]->p_qte ?>">
							</div>
							<div class="col-md-2 form-group">
								<label for="">Prix Unitaire (Ar) </label>
								<input type="text" class="form-control" name="p_pu" value="<?php echo $produits[0]->p_pu ?>">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Date Achat </label>
								<input type="date" class="form-control" name="p_date_achat" value="<?php echo $produits[0]->p_date_achat ?>">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Entrée en stock </label>
								<input type="date" class="form-control" name="p_date_instock" value="<?php echo $produits[0]->p_date_instock ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="">Magasin </label>
								<select class="form-control" name="magasins_id">
								<option value="">Emplacement...</option>
								<?php foreach ($magasin as $m) { ?>
									<option value="<?php echo $m -> id; ?>"><?php echo $m -> nom; ?> </option>
								<?php } ?>
								</select>
							</div>
							<div class="col-md-4 form-group">
								<label for="">Fournisseur </label>
								<select class="form-control" name="fournisseurs_id">
									<option value="">Fournisseurs...</option>
									<?php foreach ($fournisseurs as $f) { ?>
										<option value="<?php echo $f -> id; ?>"> <?php echo $f -> f_nom; ?> </option>;
									<?php } ?>
								</select>
							</div>
						</div>

						<button type="submit" name="ajouter" value="ajouter" class="btn btn-primary">Enregistrer</button>
					</form>

				</div>
		</div>