
<?php 
$this->load->helper('date');
?>
             <!-- Horizontal Layout -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                                INPUT DATA NASABAH
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-vertical" action="<?= $action?>" method="POST">
                               <div class="row clearfix" >
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Jenis Pengeluaran</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="text" name="expName" class="form-control" id="jenispengeluaran" value="<?= $expName?>">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <input type="hidden" name="expId" value="<?=$expId?>">
                              
                                <div class="row clearfix">
                                    <div class="col-lg-offset-4 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-success m-t-15 
                                        waves-effect">Save</button>
                                        <a href="<?=$cancel?>" class="btn btn-danger m-t-15 waves-effect">Cancel</a>

                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
