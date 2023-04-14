             <!-- Horizontal Layout -->
             <div class="row clearfix">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                            Data <?= $title?>
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-vertical" action="<?= $action?>" method="POST">
                                <div class="row clearfix" >
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Name </label>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="input" name="name" class="form-control" id="name" value="">
                                            </div>
                                            <?= form_error('name')?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Username </label>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="input" name="username" class="form-control" id="username" value="">
                                            </div>
                                            <?= form_error('username')?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Password </label>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="password" name="password" class="form-control" id="password" value="">
                                            </div>
                                            <?= form_error('password')?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pengeluaran">Konfirmasi Password </label>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-xs-7 col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="password" name="confpassword" class="form-control" id="confpassword" value="">
                                            </div>
                                            <?= form_error('confpassword')?>
                                        </div>
                                    </div>
                               </div>                            
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
