<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3>Ajouter demande</h3>
		</div>
		<form action="<?php echo site_url('paoma/add_demande'); ?>" method="POST">
			
			<div class="form-group">
				<label for="">Client *</label>
				<select class="form-control" name="clients_id">
					<option value=""></option>
					<?php foreach ($clients as $clt) {
						echo '<option value="' . $clt -> id . '">' . $clt -> clt_nom . '</option>';
					}?>
					</select>
			</div>
			<div class="form-group">
				<label for="">Motif *</label>
				<input type="text" class="form-control" name="motif" required>
			</div>

			<button type="submit" name="ajouter" value="ajouter" class="btn btn-primary">
				Ajouter
			</button>
		</form>
	</div>
</div>