<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3>Listes produits </h3>
			<div class="btn-group">
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#add">Nouveau</button>
			<button type="button" class="btn btn-default">Sortie</button>
		</div>
		</div>

		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>code</th>
					<th>Nom</th>
					<th>Référence</th>
					<th class="hidden">Déscription</th>
					<th>Quantité</th>
					<th>Prix</th>
					<th>Achat le</th>
					<th>En Stock</th>
					<th>Emplacements</th>
					<th>Fournisseurs</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
					<?php foreach ($data as $value) { ?>
				<tr>
					<td><?php echo $value -> id; ?></td>
					<td><?php echo $value -> p_code; ?></td>
					<td><?php echo $value -> p_nom; ?></td>
					<td><?php echo $value -> p_ref; ?></td>
					<td class="hidden"><?php echo $value -> p_description; ?></td>
					<td><?php echo $value -> p_qte; ?></td>
					<td><?php echo $value -> p_pu; ?></td>
					<td><?php echo date('d-m-y', strtotime($value -> p_date_achat)); ?></td>
					<td><?php echo date('d-m-y', strtotime($value -> p_date_instock)); ?></td>
					<td><?php echo $value -> magasins_id; ?></td>
					<td><?php echo $value -> fournisseurs_id; ?></td>
					<td>
						<div class="btn-group">
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li class="bg-warning"><a  href="<?php echo site_url('paoma/edit_produits/'.$value->id)?>">Editer</a></li>
								<li class="bg-danger"><a href="<?php echo site_url('paoma/delete_produits/'.$value->id)?>">Supprimer</a></li>
							</ul>
						</div>
					</td>
				</tr>
					<?php } ?>
			</tbody>
		</table>
			<div class="pagination pagination-lg">
				<?php echo $links; ?>
			</div>
	</div>
</div>

<!-- Modal nouveau produits -->
<div class="modal fade" id="add">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Nouveau produits</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url('paoma/add_produit'); ?>" method="POST">
						<div class="row">
							<div class="col-md-2 form-group">
								<label for="">Code </label>
								<input type="text" class="form-control" name="p_code" >
							</div>
							<div class="col-md-2 form-group">
								<label for="">Nom </label>
								<input type="text" class="form-control" name="p_nom" >
							</div>
							<div class="col-md-2 form-group">
								<label for="">Référence </label>
								<input type="text" class="form-control" name="p_ref" >
							</div>
							<div class="col-md-6 form-group">
								<label for="">Déscription </label>
								<textarea name="p_description" class="form-control"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group">
								<label for="">Nombre </label>
								<input type="text" class="form-control" name="p_qte" >
							</div>
							<div class="col-md-2 form-group">
								<label for="">Prix Unitaire (Ar) </label>
								<input type="text" class="form-control" name="p_pu" >
							</div>
							<div class="col-md-4 form-group">
								<label for="">Date Achat </label>
								<input type="date" class="form-control" name="p_date_achat" >
							</div>
							<div class="col-md-4 form-group">
								<label for="">Entrée en stock </label>
								<input type="date" class="form-control" name="p_date_instock" >
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
							<div class="col-md-2 form-group">
								<label>Ajouter</label>
								<button class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#magasin">Magasin</button>
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
							<div class="col-md-2 form-group">
								<label>Ajouter</label>
								<button class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#fournisseur">Fournisseur</button>
							</div>
						</div>

						<button type="submit" name="ajouter" value="ajouter" class="btn btn-primary">Enregistrer</button>
				</form>
			</div>

			<div class="modal-footer">
				<button type="reset" class="btn btn-default" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal nouveau fournisseur -->
<div class="modal fade" id="fournisseur">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Nouveau Fournisseur</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url('paoma/add_fournisseur'); ?>" method="POST">
						<div class="row">

							<div class=" col-md-6 col-md-offset-3">
							
							<form action="<?php echo site_url('paoma/add_fournisseur'); ?>" method="POST">
								<div class="rendered-form">
									<div class="fb-text form-group field-nom">
										<label for="nom" class="fb-text-label">Nom </label>
										<input type="text" class="form-control" name="nom" id="nom">
									</div>
									<div class="fb-text form-group field-contact">
										<label for="contact" class="fb-text-label">Contact </label>
										<input type="text" class="form-control" name="contact" id="contact">
									</div>
									<div class="fb-text form-group field-adresse">
										<label for="adresse" class="fb-text-label">Adresse </label>
										<input type="text" class="form-control" name="adresse" id="adresse">
									</div>
								</div>
							</form>
							<button type="submit" name="ajouter" value="ajouter" class="btn btn-primary">Enregistrer</button>
							</div>
						</div>

						
					</form>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-default" data-dismiss="modal">Fermer</button>
			</div>
		</div>	</div> </div>

<!-- Modal nouveau magasin -->
<div class="modal fade" id="magasin">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Nouveau Emplacement</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url('paoma/add_magasin'); ?>" method="POST">
						<div class="row">
							<div class=" col-md-6 col-md-offset-3">
			            <div class="rendered-form">
			                <div class="fb-text form-group field-nom">
			                    <label for="nom" class="fb-text-label">Nom</label>
			                    <input type="text" class="form-control" name="nom" id="nom">
			                </div>
			                <div class="fb-text form-group field-contact">
			                    <label for="contact" class="fb-text-label">Contact</label>
			                    <input type="text" class="form-control" name="contact" id="contact">
			                </div>
			                <div class="fb-text form-group field-adresse">
			                    <label for="adresse" class="fb-text-label">Adresse</label>
			                    <input type="text" class="form-control" name="adresse" id="adresse">
			                </div>
			                <div class="fb-button form-group field-ajouter">
			                    <button type="submit" class="btn btn-primary" name="ajouter" value="ajouter" id="ajouter">
			                        Enregistrer
			                    </button>
			                </div>
			            </div>
			        </div>
			    </div>
			</form>
        
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-default" data-dismiss="modal">Fermer</button>
			</div>
		</div>	</div> </div>