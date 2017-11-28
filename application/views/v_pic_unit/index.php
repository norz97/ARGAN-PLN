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
                        <!-- Card Icon -->
                        <div class="card-header card-header-icon" data-background-color="red">
                            <i class="material-icons">account_box</i>
                        </div>
                        <!-- End Card Icon -->
                        <!-- Card Content -->
                        <div class="card-content">
                            <!-- Card Title -->
                            <h4 class="card-title">PIC Unit</h4>
                            <!-- End Card Title -->
                            <hr>
                            <!-- Toolbar -->
                            <div class="toolbar">
                                <a href="<?= base_url() ?>C_pic_unit/create" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-fw"></i> Tambah Data</a>
                            </div>
                            <!-- End Toolbar -->

                            <!-- Datatables -->
                            <div class="material-datatables">
                                <!-- Table -->
                                <table id="datatables" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                    <!--Table Head-->
                                     <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Email</th>
                                            <th class="text-center disabled-sorting">Aksi</th>
                                        </tr>
                                    </thead>
                                    <!-- End Table Head -->
                                    <!-- Table Foot -->
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Email</th>
                                            <th class="text-center disabled-sorting">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <!-- End Table Foot -->

                                    <!--Table Body-->
                                    <tbody>
                                        <?php
                                        if ($hasil){
                                            $no = 1;
                                            $array = json_decode($hasil, true);
                                            foreach($array as $data) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++;?></td>
                                            <td><?php echo $data['nm_pic'];?></td>
                                            <td><?php echo $data['no_telp'];?></td>
                                            <td><?php echo $data['email'];?></td>
                                            <td class="text-center td-actions">
                                                <a href="<?= base_url() ?>C_pic_unit/update/<?= $data['id_pic']?>" 
                                                class="btn btn-info btn-fill">
                                                <i class="fa fa-pencil"></i> Edit
                                                </a>
                                                <a href="<?= base_url() ?>c_pic_unit/deletedata/<?= $data['id_pic']?>" 
                                                class="btn btn-danger btn-fill">
                                                <i class="fa fa-trash-o"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                         <?php
                                        }
                                        }
                                        ?>
                                    </tbody>
                                    <!-- End Table Body -->

                                </table>
                                <!-- End Table -->
                            </div>
                            <!-- End Datatables -->
                        </div>
                        <!-- End Card Content -->
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
    <!-- End Wrapper -->

<!--Main Footer-->
<?php
$this->load->view('v_main/footer');
?>