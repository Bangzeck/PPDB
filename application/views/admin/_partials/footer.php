</div>
</div>


<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>/assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>/assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>/assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>/assets/admin/vendor/dist/js/sb-admin-2.js"></script>
<!-- Date Picke -->
<script src="<?php echo base_url();?>/assets/admin/vendor/datepicker/js/bootstrap-datepicker.js"></script>

<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/javascript.js"></script>
<script src="<?php echo base_url();?>assets/js/form-wizard.js"></script>



<script src="<?php echo base_url();?>assets/admin/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/dataTables/dataTables.bootstrap.min.js"></script>






<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<script type="text/javascript">
$(document).ready(function() {
    $('.data').DataTable();
});
</script>

<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>


<script type="text/javascript">
$("#checkAll").click(function() {
    $(".check").prop('checked', $(this).prop('checked'));
});
</script>
</body>

</html>