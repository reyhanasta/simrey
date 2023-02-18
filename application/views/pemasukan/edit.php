
<?php 
$this->load->helper('date');
?>
             <!-- Horizontal Layout -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                                EDIT DATA NASABAH
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-vertical" action="<?= $action?>" method="POST">
                            <div class="row clearfix" >
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Tanggal </label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="date" name="mDate" class="form-control" id="tglpengeluaran" value="<?php print $mDate?>">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="row clearfix" >
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Asal Pemasukan</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="text" name="mJenis" class="form-control" id="namapengeluaran" value="<?= $mJenis  ?>">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <!-- <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Jenis Pengeluaran</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <select class="form-control show-tick" name="pJenis" id="jenispengeluaran">
                                                     <option  value="">Pilih</option>
                                                     <?php
                                                     foreach($pengeluaranmaster as $row):?>
                                                        <option <?php print ($row->expName == $pJenis) ? 'selected' : ''; ?> value="<?= $row->expName ?>"><?= $row->expName?></option>
                                                     <?php endforeach?>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>
                               </div> -->
                               <div class="row clearfix" >
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Biaya</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="text" name="mNominal" class="form-control uang" id="biayapengeluaran" value="<?= $mNominal ?>">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               

                                <!-- <input type="hidden" name="tgl_entry" value=<?= mdate('%Y-%m-%d')?>> -->
                                <input type="hidden" name="mId" value=<?= $mId?>>
                              
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
