<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
		<h3> Listes articles </h3>
		</div>
		<table class="table table-responsive">
			<thead>
				<tr>
					<th>#</th>
					<th>code</th>
					<th>Nom</th>
					<th>Déscription</th>
					<th>Référence</th>
					<th>Client</th>
					<th>Action</th>
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
					<td><button type="button" value="<?php echo $value -> id; ?>" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span></button></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<div class="pagination">
			<?php echo $links; ?>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Details</h4>
			</div>
			<div class="modal-body">
				 <div id="result"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>