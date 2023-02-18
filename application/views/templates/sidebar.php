 <!-- #Top Bar -->
 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php print base_url('assets/images/aboo.png')?>" width="38" height="38" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">person</i></div>
                    <div class="email">astareyhan@gmail.com</div>
                </div>
            </div>
            
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">KELOLA DATA</li>
                    <li <?php if($this->uri->segment(1) == 'pengeluaran' && $this->uri->segment(2) != 'pengeluaranMasterAdd'){ echo 'class="active"';}?>>
                        <a href="<?=site_url('pengeluaran/pengeluaranView')?>">
                            <i class="material-icons">view_list</i>
                            <span>Daftar Pengeluaran</span>
                        </a>
                    </li>   
                    <li <?php if($this->uri->segment(1) == 'pemasukan'){ echo 'class="active"';}?>>
                        <a href="<?=site_url('pemasukan/pemasukanView')?>">
                            <i class="material-icons">view_list</i>
                            <span>Daftar Pemasukan</span>
                        </a>
                    </li>   
                    <li <?php if($this->uri->segment(1) == 'wishlist'){ echo 'class="active"';}?>>
                        <a href="<?=site_url('wishlist/index')?>">
                            <i class="material-icons">view_list</i>
                            <span>Wishlist</span>
                        </a>
                    </li>   
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?php if ($this->uri->segment(1) == 'admin' AND $this->uri->segment(2) == null){ echo 'class="active"';}?>>
                        <a href="<?= site_url('admin');?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li <?php if ($this->uri->segment(2) == 'laporan' OR $this->uri->segment(2) == 'laporanHarian' OR $this->uri->segment(2) == 'laporanBulanan'){ echo 'class="active"';}?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">book</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                                <li <?php if ($this->uri->segment(2) == 'laporanBulanan'){ echo 'class="active"';}?>>
                                    <a href="<?= site_url('admin/laporanBulanan');?>">
                                        <span>Laporan Bulanan</span>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="header">MASTER DATA</li>
                    <li <?php if ($this->uri->segment(1) == 'pengeluaran' && $this->uri->segment(2) != 'pengeluaranView'){ echo 'class="active"';}?>>
                        <a href="<?= site_url('pengeluaran');?>">
                            <i class="material-icons">folder_shared</i>
                            <span>Jenis Pengeluaran</span>
                        </a>
                    </li>
                        
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->


        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green" class="active">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        </section>