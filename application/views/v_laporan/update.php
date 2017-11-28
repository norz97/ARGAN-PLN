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
                        <?php
                            foreach($hasil as $data) {
                        ?>
                        <!-- Form -->
                        <form role="form" method="post" class="form-horizontal" action="<?= base_url() ?>C_data_laporan/edit2">
                        <input type="text" name="id_lapor" value="<?= $data["id_lapor"]?>" hidden />
                            <!-- Card Icon -->
                            <div class="card-header card-header-icon" data-background-color="red">
                                <i class="material-icons">event_note</i>
                            </div>
                            <!-- End Card Icon -->

                            <!-- Card Content -->
                            <div class="card-content">
                                <!-- Card Title -->
                                <h4 class="card-title">Edit Data</h4>
                                <!-- End Card Title -->
                                <hr>

                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="no_tiket">No Tiket</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="no_tiket" name="no_tiket" value="<?= $data["no_tiket"]?>" placeholder="Masukan nomor tiket..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="wktu_down">Waktu Down</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="wktu_down" name="wktu_down" value="<?= $data["wktu_down"]?>" placeholder="Masukan waktu down..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="wktu_up">Waktu Up</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="wktu_up" name="wktu_up" value="<?= $data["wktu_up"]?>" placeholder="Masukan waktu up..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="lama_gangguan">Lama Gangguan</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="lama_gangguan" name="lama_gangguan" value="<?= $data["lama_gangguan"]?>" placeholder="Masukan lama..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="no_tiket_icon">No Tiket Icon</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="no_tiket_icon" name="no_tiket_icon" value="<?= $data["no_tiket_icon"]?>" placeholder="Masukan no tiket..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="no_tiket_telkom">No Tiket Telkom</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="no_tiket_telkom" name="no_tiket_telkom" value="<?= $data["no_tiket_telkom"]?>" placeholder="Masukan no tiket..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="sebab_gangguan">Penyebab Gangguan</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <textarea class="form-control" name="sebab_gangguan" id="sebab_gangguan" placeholder="Masukan Deskripsi.."><?= $data["sebab_gangguan"]?></textarea>
                                            <br>
                                            <input type="submit" name="submit" class="btn btn-info btn-fill" value="Update" />
                                            <input type="button" name="cancel" class="btn btn-warning btn-fill" value="Cancel" onclick="history.back()" />
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