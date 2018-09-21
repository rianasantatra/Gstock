<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
		<h3> Listes produits </h3>
		</div>
		<table class="table table-responsive table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>code</th>
					<th>Nom</th>
					<th>Référence</th>
					<th>Déscription</th>
					<th>Quantité</th>
					<th>Prix</th>
					<th>Date achat</th>
					<th>Entrée Stock</th>
					<th>Emplacements</th>
					<th>Fournisseurs</th>
					<!--<th>Action</th>-->
				</tr>
			</thead>
			<tbody>
			<?php foreach ($data as $value) { ?>
				<tr>
					<td><?php echo $value -> id; ?></td>
					<td><?php echo $value -> p_code; ?></td>
					<td><?php echo $value -> p_nom; ?></td>
					<td><?php echo $value -> p_ref; ?></td>
					<td><?php echo $value -> p_description; ?></td>
					<td><?php echo $value -> p_qte; ?></td>
					<td><?php echo $value -> p_pu; ?></td>
					<td><?php echo $value -> p_date_achat; ?></td>
					<td><?php echo $value -> p_date_instock; ?></td>
					<td><?php echo $value -> magasins_id; ?></td>
					<td><?php echo $value -> fournisseurs_id; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<div class="pagination">
			<?php echo $links; ?>
		</div>
	</div>
</div>