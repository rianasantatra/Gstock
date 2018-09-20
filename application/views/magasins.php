<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
        <div class="page-header">
            <h3> Listes	Magasins </h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Contact</th>
                    <th>Adresse</th>
                    <!--<th>Action</th>-->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value) { ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->nom; ?></td>
                        <td><?php echo $value->contact; ?></td>
                        <td><?php echo $value->adresse; ?></td>
                        <!--<td>
                            <a href="<?php echo site_url('paoma/update/' . $value->id); ?>"
                            class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="<?php echo site_url('paoma/delete_user/' . $value->id); ?>"
                            class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>-->
                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>
</div>