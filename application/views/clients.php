<div class="col-sm-9 col-md-10 affix-content">
	<div class="container">
		<div class="page-header">
			<h3> Listes	clients </h3>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
					<th>Contact</th>
					<th>Adresse</th>
					<th>Bureau</th>
				</tr>
			</thead>
			<tbody>
					<?php foreach( $data as $value ) { ?>
					<tr>
					<td><?php echo $value -> id; ?></td>
					<td><?php echo $value -> clt_nom; ?></td>
					<td><?php echo $value -> clt_contact; ?></td>
                    <td><?php echo $value -> clt_adresse; ?></td>
                    <td><?php echo $value -> clt_bureau; ?></td>
				</tr>
					<?php } ?>
				</tbody>
		</table>
	</div>
</div>