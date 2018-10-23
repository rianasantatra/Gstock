<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
		<h3> Listes articles </h3>
		</div>
		<table id="myTable" class="table table-responsive" style="width:100%">
			<thead>
				<tr>
					<th>#</th>
					<th>code</th>
					<th>Nom</th>
					<th>Déscription</th>
					<th>Référence</th>
					<th>Client</th>
					<th>Envoyer le</th>
					<th>Réintégration le</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
				<?php foreach ($data as $value) { 
					$color = '';
					if ($value -> clients_id > 0) {
						$color = 'class="info"';
					}
				?>
			<tbody>
				<tr <?php echo $color; ?>>
					<td><?php echo $value -> id; ?></td>
					<td><?php echo $value -> art_code; ?></td>
					<td><?php echo $value -> art_nom; ?></td>
					<td><?php echo $value -> art_description; ?></td>
					<td><?php echo $value -> produits_id; ?></td>
					<td><?php echo $value -> clients_id; ?></td>
					<td><?php echo date('d-m-y', strtotime($value -> envoi)); ?></td>
					<td><?php echo date('d-m-y', strtotime($value -> reintegration)); ?></td>
					<td>
						<button class="btn btn-default"><span class="material-icons">search</span></button>
						<button class="btn btn-default"><span class="material-icons">edit</span></button>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="pagination">
			<?php echo $links; ?>
		</div>
	</div>
</div>

<script>

</script>