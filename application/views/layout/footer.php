</div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables.app.js"></script>
<script>
    $(document).ready( function () {
    $('#table').DataTable({
        responsive: true,
        paging: false,
        "autoWidth": true,
        ordering:  true, "order": [[ 0, "desc" ]]
    });
} );
</script>
</body>
</html>
