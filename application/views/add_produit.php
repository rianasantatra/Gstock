<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3>
				<span class="glyphicon glyphicon-shopping-cart"></span> Ajouter
				produit
			</h3>
		</div>
		<form action="<?php echo site_url('paoma/add_produit'); ?>"
			method="POST">
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="">Nom</label> <input type="text" class="form-control"
						id="nom" name="nom" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Reference</label> <input type="text"
						class="form-control" id="ref" name="ref" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Description</label> <input type="text"
						class="form-control" id="description" name="description" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Qte</label> <input type="text" class="form-control"
						id="qte" name="qte" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="">Type</label> <select class="form-control" name="type">
						<option value=""></option>
						<option value="materiel">materiel</option>
						<option value="consommable">consommable</option>
					</select>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Date achat</label> <input type="date"
						class="form-control" id="data_achat" name="date_achat" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="">Zone</label> <select class="form-control" name="zone">
						<option value="CAME">CAME</option>
					</select>
				</div>
			</div>

			<button type="submit" name="ajouter" value="ajouter"
				class="btn btn-primary">Ajouter</button>
		</form>
	</div>
</div>