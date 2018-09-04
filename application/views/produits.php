<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
		<h3><span class="glyphicon glyphicon-list-alt"></span> Listes produits </h3>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>#</th><th>Nom</th><th>Référence</th><th>Déscription</th><th>Quantité</th><th>Type</th><th>Date achat</th><th>Zone</th><th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach( $data as $value ) { ?>
				<tr>
					<td><?php echo $value -> id; ?></td>
					<td><?php echo $value -> nom; ?></td>
					<td><?php echo $value -> ref; ?></td>
					<td><?php echo $value -> description; ?></td>
					<td><?php echo $value -> qte; ?></td>
					<td><?php echo $value -> type; ?></td>
					<td><?php echo $value -> date_achat; ?></td>
					<td><?php echo $value -> zone; ?></td>
					
					<td>
						<a href="<?php echo site_url('paoma/updates/' . $value -> id); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a> 
						<a href="<?php echo site_url('paoma/delete_produit/' . $value -> id); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
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