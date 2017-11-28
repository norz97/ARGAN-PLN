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
                        <div class="nav-tabs-navigation">
                            <div class="card-header card-header-tabs" data-background-color="red">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#laporan1" data-toggle="tab">
                                                Data Laporan
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#laporan2" data-toggle="tab">
                                                Laporan
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card Content -->
                        <div class="card-content">
                            <div class="tab-content">
                                <div class="tab-pane active" id="laporan1">
                                    <!-- Toolbar -->
                                    <div class="toolbar">
                                        <a href="<?= base_url() ?>C_data_laporan/create" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-fw"></i> Tambah Data</a>
                                    </div>
                                    <!-- End Toolbar -->

                                    <!-- Datatables -->
                                    <div class="material-datatables">
                                        <!-- Table -->
                                        <table id="datatables" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                            <!--Table Head-->
                                             <thead>
                                                <tr>
                                                    <th class="text-center disabled-sorting">#</th>
                                                    <th>Unit</th>
                                                    <th>PIC 1</th>
                                                    <th>PIC 2</th>
                                                    <th>IP WAN</th>
                                                    <th>IP LAN</th>
                                                    <th class="disabled-sorting">Device</th>
                                                    <th class="disabled-sorting">Telp Kantor</th>
                                                    <th class="disabled-sorting">Icon SID</th>
                                                    <th class="disabled-sorting">Telkom SID</th>
                                                    <th class="disabled-sorting">Group Provider</th>
                                                    <th class="text-center disabled-sorting">Aksi</th>
                                                </tr>
                                            </thead>
                                            <!-- End Table Head -->
                                            <!-- Table Foot -->
                                            <tfoot>
                                                <tr>
                                                    <th class="text-center disabled-sorting">#</th>
                                                    <th>Unit</th>
                                                    <th>PIC 1</th>
                                                    <th>PIC 2</th>
                                                    <th>IP WAN</th>
                                                    <th>IP LAN</th>
                                                    <th class="disabled-sorting">Device</th>
                                                    <th class="disabled-sorting">Telp Kantor</th>
                                                    <th class="disabled-sorting">Icon SID</th>
                                                    <th class="disabled-sorting">Telkom SID</th>
                                                    <th class="disabled-sorting">Group Provider</th>
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
                                                    <th class="text-center"><?php echo $no++;?></th>
                                                    <td><?php echo $data['nm_unit'];?></td>
                                                    <td><?php echo $data['nm_pic'];?></td>
                                                    <td><?php echo $data['nm_pic_b'];?></td>
                                                    <td><?php echo $data['ip_wan'];?></td>
                                                    <td><?php echo $data['ip_lan'];?></td>
                                                    <td><?php echo $data['perangkat'];?></td>
                                                    <td><?php echo $data['telp_kantor'];?></td>
                                                    <td><?php echo $data['icon_sid'];?></td>
                                                    <td><?php echo $data['telkom_sid'];?></td>
                                                    <td><?php echo $data['nm_gprov'];?></td>
                                                    <td class="text-center td-actions">
                                                        <a href="<?= base_url() ?>C_data_laporan/lapor/<?= $data['id']?>" rel="tooltip" title="Lapor" class="btn btn-success btn-simple"><i class="material-icons" id="btnSend">send</i></a>
                                                        <a href="<?= base_url() ?>C_data_laporan/update/<?= $data['id']?>" rel="tooltip" title="Edit" class="btn btn-info btn-simple"><i class="material-icons">edit</i></a>
                                                        <a href="<?= base_url() ?>C_data_laporan/deletedata/<?= $data['id']?>" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple"><i class="material-icons">delete</i></a>
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
                                <div class="tab-pane" id="laporan2">
                                    <!-- Datatables -->
                                    <div class="material-datatables">
                                        <!-- Table -->
                                        <table id="datatables2" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                            <!--Table Head-->
                                             <thead>
                                                <tr>
                                                    <th class="text-center disabled-sorting">#</th>
                                                    <th>No Tiket</th>
                                                    <th>Unit</th>
                                                    <th>Provider</th>
                                                    <th>Waktu Down</th>
                                                    <th>Waktu Up</th>
                                                    <th>Lama Problem</th>
                                                    <th>NoTik Icon</th>
                                                    <th>NoTIk Telkom</th>
                                                    <th class="disabled-sorting">Penyebab</th>
                                                    <th class="text-center disabled-sorting">Aksi</th>
                                                </tr>
                                            </thead>
                                            <!-- End Table Head -->
                                            <!-- Table Foot -->
                                            <tfoot>
                                                <tr>
                                                    <th class="text-center disabled-sorting">#</th>
                                                    <th>No Tiket</th>
                                                    <th>Unit</th>
                                                    <th>Provider</th>
                                                    <th>Waktu Down</th>
                                                    <th>Waktu Up</th>
                                                    <th>Lama Problem</th>
                                                    <th>NoTik Icon</th>
                                                    <th>NoTIk Telkom</th>
                                                    <th class="disabled-sorting">Penyebab</th>
                                                    <th class="text-center disabled-sorting">Aksi</th>
                                                </tr>
                                            </tfoot>
                                            <!-- End Table Foot -->

                                            <!--Table Body-->
                                            <tbody>
                                                <?php
                                                if ($hasil2){
                                                    $no = 1;
                                                    $array = json_decode($hasil2, true);
                                                    foreach($array as $data2) {
                                                ?>
                                                <tr>
                                                    <th class="text-center"><?php echo $no++;?></th>
                                                    <td><?php echo $data2['no_tiket'];?></td>
                                                    <td><?php echo $data2['nm_unit'];?></td>
                                                    <td><?php echo $data2['nm_gprov'];?></td>
                                                    <td><?php echo $data2['wktu_down'];?></td>
                                                    <td><?php echo $data2['wktu_up'];?></td>
                                                    <td><?php echo $data2['lama_gangguan'];?></td>
                                                    <td><?php echo $data2['no_tiket_icon'];?></td>
                                                    <td><?php echo $data2['no_tiket_telkom'];?></td>
                                                    <td><?php echo $data2['sebab_gangguan'];?></td>
                                                    <td class="text-center td-actions">
                                                        <a href="<?= base_url() ?>C_data_laporan/update2/<?= $data2['id_lapor']?>" rel="tooltip" title="Update" class="btn btn-info btn-simple btn-xs"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?= base_url() ?>C_data_laporan/deletedata2/<?= $data2['id_lapor']?>" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs"> 
                                                        <i class="fa fa-trash-o"></i></a>
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
                            </div>
                            

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