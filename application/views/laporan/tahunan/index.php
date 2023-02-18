<!-- 
<div class="row-clearfix">
    <div class="body">
        <div class="card">
           
        </div>
    </div>
</div> -->

<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $title?>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <form action="<?= $action?>" method="POST">
                                        <!-- <select value="">
                                            <option value="">hi</option>
                                            <option value="">hi</option>
                                            <option value="">hi</option>
                                        </select> -->
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <canvas id="bar_chart" height="70"></canvas>
                        <br>
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="1" style="text-align: center;" >No</th>
                                            <th style="text-align: center;" width="58%">Indikator</th>  
                                            <th  style="text-align: center;">Nominal</th>  

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="1" style="text-align: center;" ></th>
                                            <th style="text-align: center;" width="58%">Selisih</th>  
                                            <th  style="text-align: center;">(Nominal)</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            <tr>
                                                <td style="text-align: center;">1</td>
                                                <td style="text-align: center;">Pemasukan</td>
                                                <?php foreach ($totalin as $row):?>
                                                <td style="text-align: center;">Rp <?= number_format($row->mNominal)?>,00</td>
                                                <?php endforeach?>
                                            </tr>
                                            <tr>

                                                <td style="text-align: center;">2</td>
                                                <td style="text-align: center;">Pengeluaran</td>
                                                <?php foreach ($totalout as $row):?>
                                                <td style="text-align: center;">Rp <?= number_format($row->pHarga)?>,00</td>
                                                <?php endforeach?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

 <!-- Jquery Core Js -->
 <script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.js')?>"></script>

<!-- Input Mask Plugin Js -->
<script src="<?= base_url('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')?>"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url('assets/plugins/node-waves/waves.js')?>"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url('assets/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>

<!-- Custom Js -->
<script src="<?= base_url('assets/js/admin.js')?>"></script>
<script src="<?= base_url('assets/js/pages/tables/jquery-datatable.js')?>"></script>

<!-- Chart Plugins Js -->
<script src="<?= base_url('assets/plugins/chartjs/Chart.bundle.js')?>"></script>

<!-- Demo Js -->
<script src="<?= base_url('assets/js/demo.js')?>"></script>

<!-- SCRIPT CHART -->
<script>
    // var ctx = document.getElementById("bar_chart").getContext('2d');
	// 	var myChart = new Chart(ctx, {
	// 		type: 'bar',
    //         data: {
    //             datasets: [{
    //                 data: [<?php foreach ($pre_total_in_bulan as $row):?>
        <?= $row->mNominal?>
                         <?php endforeach?>,<?php foreach ($total_in_bulan as $row):?>
                              <?= $row->mNominal?>
                         <?php endforeach?>],
    //                 backgroundColor: [
    //                     "rgb(233, 30, 99)",
    //                     "rgb(0, 188, 212)"
    //                 ],
    //             }],
    //             labels: [
    //                 "Pengeluaran",
    //                 "Pemasukan"
    //             ]
    //         }
	// 	});
    var ctx = document.getElementById("bar_chart").getContext('2d');
		var myChart = new Chart(ctx, {
            type: 'line',
            data: {

                labels: [<?= $y_title;?>],
                datasets: [{
                    label: "Pemasukan",
                    data: [<?= $x_title?>],
                    borderColor: 'rgba(0, 188, 212, 0.75)',
                    backgroundColor: 'rgba(0, 188, 212, 0.3)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                    pointBorderWidth: 1
                }, {
                        label: "Pengeluaran",
                        data: [<?php foreach ($pre_total_out_bulan as $row):?>
                              <?= $row->pHarga?>
                         <?php endforeach?>,<?php foreach ($total_out_bulan as $row):?>
                              <?= $row->pHarga?>
                         <?php endforeach?>],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
		});
</script>
<!-- END CHART -->