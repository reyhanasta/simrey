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
                                DATA MASTER PENGELUARAN
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
                                <a class="btn btn-primary waves-effect" href="<?= base_url('user/add')?>"> Tambah Data </a>
                            </div>
                        </div>
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="1" style="text-align: center;" >No</th>
                                            <th style="text-align: center;" >Username</th>  
                                            <th style="text-align: center;" >Password</th>  
                                            <th style="text-align: center;" >Level</th>  
                                            <th width = "5%" colspan="2" style="text-align: center;">Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($data_user as $index) { ?>
                                            <tr>
                                                <td style="text-align: center;"><?= $i++?></td>
                                                <td style="text-align: center;"><?= $index['username']?></td>
                                                <td style="text-align: center;"><?= $index['password']?></td>
                                                <td style="text-align: center;"><?= $index['level']?></td>
                                                <td style="text-align: center;">
                                                    <a href="<?= base_url()?>user/delete/<?= $index['userId']?>" class="btn btn-danger waves-effect" onclick="return confirm('Apakah yakin akna dihapus ?');">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </td>
                                            
                                                <td style="text-align: center;"> 
                                                    <a href="<?= base_url()?>user/edit/<?= $index['userId']?>" class="btn btn-warning waves-effect" >
                                                        <i class="material-icons">settings </i>
                                                    </a>
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