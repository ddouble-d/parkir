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
                                <h6 class="m-0 font-weight-bold text-primary">Data Konsumen</h6>
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
                                            <th>Jenis Kendaraan</th>
                                            <th>No. Polisi</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Kelamin</th>
                                            <th>No. HP</th>
                                            <th width="15%">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($konsumen as $data) : ?>
                                                <tr>
                                                    <td><?= $data['konsumen'] ?></td>
                                                    <td><?= $data['jenis_kendaraan'] ?></td>
                                                    <td><?= $data['no_polisi'] ?></td>
                                                    <td><?= $data['tgl_lahir'] ?></td>
                                                    <td><?= $data['jenis_kelamin'] ?></td>
                                                    <td><?= $data['no_hp'] ?></td>
                                                    <td>
                                                        <button type="button" data-toggle="modal" data-target="#modal-edit<?= $data['id'] ?>" class="btn btn-warning btn-sm">
                                                            Edit
                                                        </button>
                                                        <a href="<?= base_url('konsumen/delete/' . $data['id']); ?>" onclick="return confirm('Hapus data?');" class="btn btn-danger btn-sm tombol-hapus">
                                                            Delete
                                                        </a>
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
                                <h5 class="modal-title">Tambah Konsumen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="<?= base_url('konsumen/tambah') ?>" method="post" enctype="multipart/form-data" role="form">
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Konsumen</b></label>
                                        <input class="form-control " name="konsumen" id="konsumen" type="text" placeholder="Masukkan Nama Konsumen" required=""></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Jenis Kendaraan</b></label>
                                        <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                                            <option value="Motor">Motor</option>
                                            <option value="Mobil">Mobil</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>No. Polisi</b></label>
                                        <input class="form-control " name="no_polisi" id="no_polisi" type="text" placeholder="Masukkan No. Polisi" required=""></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Tanggal Lahir</b></label>
                                        <input class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" type="date" required="" </input> </div> <div class="form-group mb-3">
                                        <label class="col-form-label"><b>Kelamin</b></label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-form-label"><b>No. HP</b></label>
                                        <input class="form-control" name="no_hp" placeholder="Masukkan No. HP" type="number" required=""></input>
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

                <?php $no = 0;
                foreach ($konsumen as $data) : $no++; ?>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="modal-edit<?= $data['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Konsumen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="<?= base_url('konsumen/edit') ?>" method="post" enctype="multipart/form-data" role="form">
                                    <div class="modal-body">
                                        <input type="hidden" id="id" name="id" class="form-control" value="<?= $data['id'] ?>" readonly>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Konsumen</b></label>
                                            <input class="form-control " name="konsumen" id="konsumen" type="text" placeholder="Masukkan Nama Konsumen" required="" value="<?= $data['konsumen'] ?>"></input>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Jenis Kendaraan</b></label>
                                            <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                                                <option value="Motor">Motor</option>
                                                <option value="Mobil">Mobil</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>No. Polisi</b></label>
                                            <input class="form-control " name="no_polisi" id="no_polisi" type="text" placeholder="Masukkan No. Polisi" required="" value="<?= $data['no_polisi'] ?>"></input>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Tanggal Lahir</b></label>
                                            <input class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" type="date" required="" value="<?= $data['tgl_lahir'] ?>"></input>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>Kelamin</b></label>
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <option value="L">Laki - Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label"><b>No. HP</b></label>
                                            <input class="form-control" name="no_hp" placeholder="Masukkan No. HP" type="number" required="" value="<?= $data['no_hp'] ?>"></input>
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

                    <!-- End of Modal Edit -->
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