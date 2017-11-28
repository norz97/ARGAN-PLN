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
                    <li class="active">
                        <a data-toggle="collapse" href="#masterData">
                            <i class="pe-7s-graph3"></i>
                            <p>Master Data
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="masterData">
                            <ul class="nav">
                                <li>
                                    <a href="<?= base_url() ?>C_unit/index">
                                        <span class="sidebar-mini">U</span>
                                        <span class="sidebar-normal">Unit</span>
                                    </a>
                                </li>
                                <li class="active">
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
                    <li>
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
                                PIC Unit
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
                        <form role="form" method="post" class="form-horizontal" action="<?= base_url() ?>C_pic_unit/edit">
                        <input type="text" name="id_pic" value="<?= $data["id_pic"]?>" hidden />
                            <!-- Card Icon -->
                            <div class="card-header card-header-icon" data-background-color="red">
                                <i class="material-icons">account_box</i>
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
                                    <label class="col-sm-2 label-on-left" for="namapic">Nama PIC</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="namapic" name="nm_pic" value="<?= $data["nm_pic"]?>" placeholder="Masukan nama PIC..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="notelp">Nomor Telepon</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" id="notelp" name="no_telp" value="<?= $data["no_telp"]?>" placeholder="Masukan nomor telepon..">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Label Input -->
                                <!-- Label Input -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left" for="emailpic">Email</label>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="email" class="form-control" id="emailpic" name="email" value="<?= $data["email"]?>" placeholder="Masukan alamat email.." />
                                            <br/>
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