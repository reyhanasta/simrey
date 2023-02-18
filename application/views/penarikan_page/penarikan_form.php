
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
                            <form class="form-horizontal" action="<?= $action?>" method="POST">
                                
                                <!-- BARIS KE-1 -->
                                <div class="row clearfix">
                                    
                                   
                                    <div class="col-lg-2 col-md-5 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ktp">Total Saldo</label>
                                    </div>
                                    <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line <?= form_error('id_nasabah')? 'focused error' : null ?>">
                                                <input type="text" id="total" name ="total" class="form-control" value="<?=$nominal_simpanan?>" placeholder="" readonly>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-5 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ktp">Nominal Penarikans</label>
                                    </div>
                                    <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line <?= form_error('nominal_penarikan')? 'focused error' : null ?>">
                                                <input type="text" id=" " name ="nominal_penarikan" class="form-control" value="" placeholder="Nominal Penarikan" onkeyup = "myFunction()" required>
                                            </div>
                                            <?= form_error('nominal_penarikan')?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-5 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ktp">Sisa Uang</label>
                                    </div>
                                    <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line <?= form_error('nominal_simpanan')? 'focused error' : null ?>">
                                                <input type="text" id="demo" name ="sisa_uang" class="form-control" value="" placeholder=""  readonly>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="tgl_entry" value=<?= mdate('%Y-%m-%d')?>>
                                <input type="hidden" name="id_simpanan" value=<?= $id_simpanan?>>
                              
                                <div class="row clearfix">
                                    <div class="col-lg-offset-10 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 
                                        waves-effect">Submitss</button>
                                        <a href="<?=$cancel?>" class="btn btn-default m-t-15 waves-effect">Cancel</a>

                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
            