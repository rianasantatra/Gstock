<div class="page-header">
<h3> <?php echo $title; ?> </h3>
</div>
<table class="table table-responsive" id="table">
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
  <?php foreach ($clients as $value) { ?>
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
