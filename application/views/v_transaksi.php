<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parkir</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/sb-admin-2.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>dashboard">

                <div class="sidebar-brand-text mx-3">Parkir</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- Nav Item  -->
            <li class="nav-item " id="navUserData">
                <a class="nav-link" href="<?= base_url() ?>konsumen">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Konsumen</span></a>
            </li>

            <li class="nav-item " id="navPengajuan">
                <a class="nav-link" href="<?= base_url() ?>transaksi">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Transaksi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo!</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="< ?= base_url() ?>profil">
                                    <i class="fas fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="< ?= base_url() ?>profil/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div> -->
                        </li>

                    </ul>

                </nav>

                <div class="content">
                    <!-- Begin Page Content -->
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                            </div>
                            <div class="card-body">
                                <!-- <div class="flash-data" data-flashdata="< ?= $this->session->flashdata('flash') ?>"></div> -->
                                <!-- <div class="flash-gagal" data-flashgagal="< ?= $this->session->flashdata('gagal') ?>"></div> -->
                                <button type="button" data-toggle="modal" data-target="#modal-tambah" class="btn btn-primary" style="margin-bottom:10px;">
                                    Tambah
                                </button>
                                <div class="table-responsive">
                                    <table class="table table-bordered data" width="100%" cellspacing="0">
                                        <thead>
                                            <th>Konsumen</th>
                                            <th>No. Polisi</th>
                                            <th>Masuk</th>
                                            <th>Keluar</th>
                                            <th>Biaya</th>
                                            <th width="15%">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($transaksi as $data) : ?>
                                                <tr>
                                                    <td><?= $data['konsumen'] ?></td>
                                                    <td><?= $data['no_polisi'] ?></td>
                                                    <td><?= $data['waktu_masuk'] ?></td>
                                                    <td><?= $data['waktu_keluar'] ?></td>
                                                    <td><?= $data['biaya'] ?></td>
                                                    <td>
                                                        <button type="button" data-toggle="modal" data-target="#modal-view<?= $data['id'] ?>" class="btn btn-info btn-sm">
                                                            View
                                                        </button>
                                                        <button type="button" data-toggle="modal" data-target="#modal-edit<?= $data['id'] ?>" class="btn btn-warning btn-sm">
                                                            Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Modal Tambah -->
                <div class="modal fade" id="modal-tambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="<?= base_url('transaksi/tambah') ?>" method="post" enctype="multipart/form-data" role="form">
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>No. Polisi</b></label>
                                        <select class="form-control" name="no_polisi" id="no_polisi">
                                            <?php foreach ($konsumen as $data) { ?>
                                                <option value="<?= $data['no_polisi'] ?>,<?= $data['konsumen'] ?>"><?php echo $data['no_polisi'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Tanggal Transaksi</b></label>
                                        <input class="form-control" name="tgl_masuk" placeholder="Masukkan Tanggal Transaksi" type="date" required=""></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Waktu Masuk</b></label>
                                        <input class="form-control" name="waktu_masuk" placeholder="Masukkan Waktu Masuk" type="time" required=""></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Waktu Keluar</b></label>
                                        <input class="form-control" name="waktu_keluar" placeholder="Masukkan Waktu Keluar" type="time" disabled></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Biaya</b></label>
                                        <input class="form-control" name="biaya" placeholder="-" type="number" disabled></input>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="simpan" class="btn btn-primary btn-fill">Simpan</button>
                                    <button type="button" class="btn ml-auto btn-fill" data-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Modal Tambah -->

                <?php foreach ($transaksi as $data) : ?>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="modal-edit<?= $data['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Transaksi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="<?= base_url('transaksi/edit') ?>" method="post" enctype="multipart/form-data" role="form">
                                    <div class="modal-body">

                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>No. Polisi</b></label>
                                            <input class="form-control" name="no_polisi" type="text" required="" value="<?= $data['no_polisi'] ?>" disabled></input>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Tanggal Transaksi</b></label>
                                            <input class="form-control" name="tgl_masuk" type="date" required="" value="<?= $data['tgl_masuk'] ?>" disabled></input>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Waktu Masuk</b></label>
                                            <input class="form-control" name="waktu_masuk" type="time" required="" value="<?= $data['waktu_masuk'] ?>" disabled></input>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Waktu Keluar</b></label>
                                            <input class="form-control" name="waktu_keluar" type="text" value="<?= $tanggal ?>"></input>
                                        </div>
                                        <?php
                                        if ($data['jenis_kendaraan'] == 'Motor') {
                                            $pertama = 2000;
                                            $n = 500;
                                        } else {
                                            $pertama = 5000;
                                            $n = 1000;
                                        }
                                        $totalJam = (intval($tanggal)) - (intval($data['waktu_masuk']));
                                        if ($totalJam <= 1) {
                                            $biaya = $pertama;
                                        } elseif ($totalJam > 1) {
                                            $jamSelanjutnya = $n * ($totalJam - 1);
                                            $biaya = $pertama + $jamSelanjutnya;
                                        } else {
                                            $biaya = 0;
                                        }
                                        ?>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Biaya</b></label>
                                            <input class="form-control" name="biaya" type="number" value="<?= $biaya ?>" disabled></input>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <div class="modal-footer">
                                        <button type="submit" id="simpan" class="btn btn-primary btn-fill">Simpan</button>
                                        <button type="button" class="btn ml-auto btn-fill" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal Edit -->

                    <!-- Modal View -->
                    <div class="modal fade" id="modal-view<?= $data['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Detail Transaksi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-6">
                                            <label class="col-form-label"><b>Konsumen</b></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $data['konsumen'] ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-6">
                                            <label class="col-form-label"><b>No. Polisi</b></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $data['no_polisi'] ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-6">
                                            <label class="col-form-label"><b>Jenis Kendaraan</b></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $data['jenis_kendaraan'] ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-6">
                                            <label class="col-form-label"><b>Tanggal Transaksi</b></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $data['tgl_masuk'] ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-6">
                                            <label class="col-form-label"><b>Waktu Masuk</b></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $data['waktu_masuk'] ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-6">
                                            <label class="col-form-label"><b>Waktu Keluar</b></label>
                                        </div>
                                        <div class="col-sm-6">
                                            --:--
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-6">
                                            <label class="col-form-label"><b>Biaya</b></label>
                                        </div>
                                        <div class="col-sm-6">
                                            0
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal View -->
                <?php endforeach; ?>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <!-- <script src="< ?=base_url()?>assets/startbootstrap-sb-admin-2-gh-pages/vendor/chart.js/Chart.min.js"></script> -->

        <!-- Page level custom scripts -->
        <!-- <script src="< ?=base_url()?>assets/startbootstrap-sb-admin-2-gh-pages/js/demo/chart-area-demo.js"></script>
  <script src="< ?=base_url()?>assets/startbootstrap-sb-admin-2-gh-pages/js/demo/chart-pie-demo.js"></script> -->

        <!-- DataTables -->
        <script src="<?= base_url() ?>assets/vendor/jQuery-3.3.1/jquery-3.3.1.js"></script>
        <script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>

</html>