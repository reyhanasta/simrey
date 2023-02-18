<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                            <?php if($this->session->flashdata('msg')){?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <?= $this->session->flashdata('msg');?>
                            </div>
                            <?php } ?>
                        <div class="header">
                            <h2>
                                <?= $title?>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Action</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="header-dropdown">
                                <a class="btn btn-primary waves-effect" href="<?= base_url('pengeluaran/pengeluaran_add')?>"> Tambah Data </a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="1" style="text-align: center;" >No</th>
                                            <th style="text-align: center;" width="25%">Nama Pengeluaran</th>  
                                            <th style="text-align: center;" width="25%">Jenis Pengeluaran</th>  
                                            <th style="text-align: center;" width="25%">Harga</th>  
                                            <th style="text-align: center;" width="25%">Tanggal</th>  
                                            <th style="text-align: left;">Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($dataPengeluaran as $key => $row) { ?>
                                            <tr>
                                                <td style="text-align: center;"><?= $i++?></td>
                                                <td style="text-align: center;"><?= $row->pNama?></td>
                                                <td style="text-align: center;"><?= $row->pJenis?></td>
                                                <td style="text-align: center;">Rp <?= number_format($row->pHarga),",00"?></td>
                                                <td style="text-align: center;"><?= date_format(new DateTime($row->pDate),'d-M-Y');?></td>
                                           
                                                
                                                <!-- <td style="text-align: center;"><a href="#" class="btn btn-warning waves-effect">
                                                    <i class="material-icons">settings</i>
                                                </a></td> -->
                                                <td style="text-align: center;">
                                                    <ul class="header-dropdown m-r--5">
                                                        <li class="dropdown" style="list-style-type:none; margin-left:-50px">
                                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="material-icons">more_vert</i>
                                                                </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li> <a href="<?= base_url()?>pengeluaran/pengeluaranEdit/<?= $row->pId?>" class="waves-effect">
                                                                    <i class="material-icons">settings</i>Edit</a>
                                                                </li>
                                                                 <li> <a href="<?= base_url()?>pengeluaran/pengeluaranDelete/<?= $row->pId?>" class="waves-effect" onclick="return confirm('Apakah yakin akna dihapus ?');">
                                                                    <i class="material-icons">delete</i>Hapus</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>  
                                                </td>
                                            </tr>
                                            <?php } ?>
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

<!-- Demo Js -->
<script src="<?= base_url('assets/js/demo.js')?>"></script>