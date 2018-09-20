<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
        <div class="page-header">
            <h3> Nouveau Fournisseur </h3>
        </div>

        <form action="<?php echo site_url('paoma/add_magasin'); ?>" method="POST">
            <div class="rendered-form">
                <div class="fb-text form-group field-nom">
                    <label for="nom" class="fb-text-label">Nom *</label>
                    <input type="text" class="form-control" name="nom" id="nom" required="required">
                </div>
                <div class="fb-text form-group field-contact">
                    <label for="contact" class="fb-text-label">Contact *</label>
                    <input type="text" class="form-control" name="contact" id="contact" required="required">
                </div>
                <div class="fb-text form-group field-adresse">
                    <label for="adresse" class="fb-text-label">Adresse *</label>
                    <input type="text" class="form-control" name="adresse" id="adresse" required="required">
                </div>
                <div class="fb-button form-group field-ajouter">
                    <button type="submit" class="btn btn-primary" name="ajouter" value="ajouter" id="ajouter">
                        Ajouter
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>