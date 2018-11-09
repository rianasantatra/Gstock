<div class="page-header">
<h3> <?php echo $title; ?> </h3>
</div>
<table class="table table-responsive" id="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Client</th>
      <th>Motif</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($demandes as $value) {?>
    <tr>
      <td><?php echo $value->id; ?></td>
      <td><?php echo $value->clients_id; ?></td>
      <td><?php echo $value->motif; ?></td>
      <td><?php echo $value->date; ?></td>
      <td>
          <a href="<?php echo site_url('demandes/edit/' . $value->id); ?>" ><span class="glyphicon glyphicon-pencil"></span></a> | <a href="<?php echo site_url('demandes/delete/' . $value->id); ?>" onclick="return confirm('Confirmer')"><span class="glyphicon glyphicon-trash"></span></a>
      </td>
    </tr>
  <?php }?>
  </tbody>
</table>
