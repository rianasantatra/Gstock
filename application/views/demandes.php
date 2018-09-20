<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3> Listes	demandes </h3>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Client</th>
					<th>Motif</th>
				</tr>
			</thead>
			<tbody>
					<?php foreach( $data as $value ) { ?>
					<tr>
					<td><?php echo $value -> id; ?></td>
					<td><?php echo $value -> clients_id; ?></td>
					<td><?php echo $value -> motif; ?></td>
				</tr>
					<?php } ?>
					
					
				</tbody>
		</table>
	</div>
</div>