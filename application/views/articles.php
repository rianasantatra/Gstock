<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
		<h3> Listes articles </h3>
		</div>
		<table class="table table-responsive">
			<thead>
				<tr>
					<th>#</th><th>code</th><th>Nom</th><th>Déscription</th><th>Référence</th><th>Client</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($data as $value) { 
				$style = '';
				if ($value -> clients_id > 0 ) {
					$style = 'class="alert alert-warning"';
				} ?>
				<tr <?php echo $style ?>>
					<td><?php echo $value -> id; ?></td>
					<td><?php echo $value -> art_code; ?></td>
					<td><?php echo $value -> art_nom; ?></td>
					<td><?php echo $value -> art_description; ?></td>
					<td><?php echo $value -> produits_id; ?></td>
					<td><?php echo $value -> clients_id; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<div class="pagination">
			<?php echo $links; ?>
		</div>
	</div>
</div>