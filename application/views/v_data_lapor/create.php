<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--Header-->
<?php
$this->load->view('v_main/header');
?>

<!--Wrapper-->
 <div class="wrapper">

    <!-- Sidebar -->
        <div class="sidebar" data-active-color="red" data-background-color="black" data-image="<?= base_url()?>assets/img/sidebar-1.jpeg">

            <!-- Sidebar Logo -->
            <div class="logo">
                <a href="<?= base_url() ?>" class="simple-text logo-mini">
                    A
                </a>
                <a href="<?= base_url() ?>" class="simple-text logo-normal">
                    ARGAN
                </a>
            </div>
            <!-- End Sidebar Logo -->

            <!-- Sidebar Menu -->
            <div class="sidebar-wrapper">
                <ul class="nav">>

                    <!-- Multi Level Menu / Dropdown -->
                    <li>
                        <a data-toggle="collapse" href="#masterData">
                            <i class="pe-7s-graph3"></i>
                            <p>Master Data
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="masterData">
                            <ul class="nav">
                                <li>
                                    <a href="<?= base_url() ?>C_unit/index">
                                        <span class="sidebar-mini">U</span>
                                        <span class="sidebar-normal">Unit</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>C_pic_unit/index">
                                        <span class="sidebar-mini">PU</span>
                                        <span class="sidebar-normal">PIC Unit</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>C_user_provider/index">
                                        <span class="sidebar-mini">UP</span>
                                        <span class="sidebar-normal">User Provider</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>C_group_provider/index">
                                        <span class="sidebar-mini">GP</span>
                                        <span class="sidebar-normal">Group Provider</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>C_cp_unit/index">
                                        <span class="sidebar-mini">CP</span>
                                        <span class="sidebar-normal">Contact Person</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Multi Level Menu / Dropdown -->

                    <!-- Single Level Menu -->
                    <li class="active">
                        <a href="<?= base_url() ?>C_data_laporan/index">
                            <i class="pe-7s-news-paper"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <!-- End Single Level Menu -->

                </ul>
            </div>
            <!-- End Sidebar Menu -->
        </div>
        <!-- End Sidebar -->

<!-- Main Panel -->
<?php
$this->load->view('v_main/main_panel');
?>
<!-- End Main Panel -->

<!-- Content -->
    <div class="content">
        <!-- Container -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <!-- Grid -->
                <div class="col-md-12">

                    <!-- Breadcrumb -->
                    <div class="page-title-box">
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="active">
                                Laporan
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                    <!-- End Breadcrumb -->

                    <!-- Card -->
                    <div class="card">
                        <!-- Form -->
                        <form role="form" method="post" class="form-horizontal" action="<?= base_url() ?>C_data_laporan/create">
                            <!-- Card Icon -->
                            <div class="card-header card-header-icon" data-background-color="red">
                                <i class="material-icons">event_note</i>
                            </div>
                            <!-- End Card Icon -->

                            <!-- Card Content -->
                            <div class="card-content">
                                <!-- Card Title -->
                                <h4 class="card-title">Tambah Data</h4>
                                <!-- End Card Title -->
                                <hr>

                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="id_unit">Unit</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <!-- Select Form -->
                                            <select class="selectpicker" title="Pilih Unit" data-style="select-with-transition" name="id_unit" required>
                                            <?php 
                                            foreach($unitlist->result() as $unit){ ?>
                                                <option value="<?php echo $unit->id_unit ?>">
                                                    <?php echo $unit->nm_unit ?>
                                                </option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="id_pic">PIC 1</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <!-- Select Form -->
                                            <select class="selectpicker" title="Pilih PIC 1" data-style="select-with-transition" name="id_pic" required>
                                            <?php 
                                            foreach($piclist->result() as $pic){ ?>
                                                <option value="<?php echo $pic->id_pic ?>">
                                                    <?php echo $pic->nm_pic ?>
                                                </option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="id_pic2">PIC 2</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <!-- Select Form -->
                                            <select class="selectpicker" title="Pilih PIC 2" data-style="select-with-transition" name="id_pic2" required>
                                            <?php 
                                            foreach($piclist2->result() as $pic2){ ?>
                                                <option value="<?php echo $pic2->id_pic ?>">
                                                    <?php echo $pic2->nm_pic ?>
                                                </option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="ip_wan">IP WAN</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="ip_wan" name="ip_wan" required placeholder="Masukan IP WAN..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="ip_lan">IP LAN</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="ip_lan" name="ip_lan" required placeholder="Masukan IP LAN..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="perangkat">Perangkat</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="perangkat" name="perangkat" required placeholder="Masukan tipe perangkat..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="telpkantor">Telpon Kantor</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="telpkantor" name="telp_kantor" required placeholder="Masukan nomor..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="icnsid">Icon SID</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="icnsid" name="icon_sid" required placeholder="Masukan nama sid..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="tlkmsid">Telkom SID</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="tlkmsid" name="telkom_sid" required placeholder="Masukan nama sid..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="id_gprov">Group Provider</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <!-- Select Form -->
                                            <select class="selectpicker" title="Pilih Group Provider" data-style="select-with-transition" name="id_gprov" required>
                                                <?php
                                                foreach ($gprovlist->result() as $gprov) {?>
                                                    <option value="<?= $gprov->id_gprov?>">
                                                        <?= $gprov->nm_gprov?>
                                                    </option>
                                               <?php } ?>
                                            </select>
                                            <br>
                                            <br>
                                            <input type="submit" name="submit" class="btn btn-primary btn-fill" value="Tambah" />
                                            <input type="button" name="cancel" class="btn btn-warning btn-fill" value="Cancel" onClick="history.back()" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                
                            </div>
                            <!-- End Card Content -->
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </div>
<!-- End Content -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <p class="copyright pull-right">
            &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="http://stmikbpn.ac.id/">STMIK Balikpapan</a>
            </p>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!--/Wrapper End-->

<!--Footer-->
<?php
$this->load->view('v_main/footer');
?>