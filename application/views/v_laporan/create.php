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
                <ul class="nav">

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
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-1">

                    <!-- Card -->
                    <div class="card">
                        <!-- Form -->
                        <form role="form" method="post" class="form-horizontal" action="<?= base_url() ?>C_lapor/create">

                            <!-- Card Content -->
                            <div class="card-content">
                                <!-- Card Title -->
                                <?php $arr = json_decode($hasil);
                                foreach ($arr as $row) {?>

                                <h4 class="card-title text-center">Periksa Data</h4>
                                <!-- End Card Title -->
                                <hr>
                                <input type="hidden" name="id_kirim" value="<?= $id_kirim?>">
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-md-4 label-on-left" for="id_unit">Unit</label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="hidden" name="id_unit" value="<?= $row->id_unit?>">
                                            <input type="text" class="form-control" id="id_unit" readonly="true" value="<?= $row->nm_unit?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-md-4 label-on-left" for="id_gprov">Group Provider</label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="hidden" name="id_gprov" value="<?= $row->id_gprov?>">
                                            <input type="text" class="form-control" id="id_gprov" readonly="true" value="<?= $row->nm_gprov?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-md-4 label-on-left" for="wktu_down">Waktu Down</label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control datetimepicker" name="wktu_down" id="wktu_down_lapor" placeholder="Masukan tanggal dan jam"/>
                                            <br>
                                            <input type="submit" name="submit" class="btn btn-primary btn-fill" value="Submit" />
                                            <input type="button" name="cancel" class="btn btn-warning btn-fill" value="Cancel" onClick="history.back()" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                
                            </div>
                            <!-- End Card Content -->
                        </form>
                        <!-- End Form -->
                        <?php
                            }
                        ?>
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