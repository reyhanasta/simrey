        </div>
    </section>



 
<!-- Jquery Core Js -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js');?>"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.js');?>"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url('assets/plugins/node-waves/waves.js');?>"></script>
    
<!-- Select Plugin Js -->
<script src="<?= base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>
<!-- Autosize Plugin Js -->
<!-- <script src="../../plugins/autosize/autosize.js"></script> -->

<!-- Moment Plugin Js -->
<!-- <script src="../../plugins/momentjs/moment.js"></script> -->

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<!-- <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> -->

<!-- Jquery CountTo Plugin Js -->
<script src="<?= base_url('assets/plugins/jquery-countto/jquery.countTo.js');?>"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src="<?= base_url('assets/plugins/bootstrap-notify/bootstrap-notify.js');?>"></script>

<!-- Morris Plugin Js -->
<script src="<?= base_url('assets/plugins/raphael/raphael.min.js');?>"></script>
<script src="<?= base_url('assets/plugins/morrisjs/morris.js');?>"></script>

<!-- ChartJs -->
<script src="<?= base_url('assets/plugins/chartjs/Chart.bundle.js');?>"></script>

<!-- Jquery Validation Plugin Css -->
<script src="<?= base_url('assets/plugins/jquery-validation/jquery.validate.js');?>"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?= base_url('assets/plugins/flot-charts/jquery.flot.js');?>"></script>
<script src="<?= base_url('assets/plugins/flot-charts/jquery.flot.resize.js');?>"></script>
<script src="<?= base_url('assets/plugins/flot-charts/jquery.flot.pie.js');?>"></script>
<script src="<?= base_url('assets/plugins/flot-charts/jquery.flot.categories.js');?>"></script>
<script src="<?= base_url('assets/plugins/flot-charts/jquery.flot.time.js');?>"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?= base_url('assets/plugins/jquery-sparkline/jquery.sparkline.js');?>"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url('assets/plugins/jquery-datatable/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js');?>"></script>

<!-- Custom Js -->
<script src="<?php echo base_url('assets/js/admin.js');?>"></script>
<script src="<?php echo base_url('assets/js/pages/index.js');?>"></script>
<script src="<?php echo base_url('assets/js/pages/tables/jquery-datatable.js');?>"></script>

<!-- Demo Js -->
<script src="<?= base_url('assets/js/demo.js')?>"></script>
<script type="text/javascript">
    function myFunction(){
        let nominal_penarikan = $("input[name=nominal_penarikan]").val();
        let total_simpanan = $("input[name=total]").val();
        let sisa = total_simpanan-nominal_penarikan ;
        document.getElementById("demo").innerHTML = sisa;
         $("input[name=sisa_uang]").val(sisa);
    }
</script>
</body>

</html>

