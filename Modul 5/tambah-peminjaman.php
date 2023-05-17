<?php
require "Koneksi.php";
require 'Model.php';
if (isset($_GET['id_peminjaman'])) {
    editPeminjaman();
}
$dataMember = getMember($conn);
$dataBuku = getBuku($conn);

if (isset($_POST['update'])) {
    updatePeminjaman($_GET["id_peminjaman"], $_POST["tgl_pinjam"], $_POST["tgl_kembali"], $_POST["id_buku"], $_POST["id_member"]);
}
if (isset($_POST['tambah'])) {
    insertDataPeminjaman($_POST["tgl_pinjam"], $_POST["tgl_kembali"], $_POST["id_buku"], $_POST["id_member"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Perpustakaan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $active = 'tambah-peminjaman' ?>
        <?php include "navbar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <p class="mb-0 pl-2" style="letter-spacing: 2px;">M. Andri Firdaus</p>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->

                    <div class="row justify-content-center">

                        <div class="col-6">
                            <form action="" method="post">
                                <h1 style="text-align: center;" class="mt-2">Tambah Data Peminjaman</h1>
                                <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control mb-3" value="<?php if (isset($_GET['id_peminjaman']))
                                                                                                                            echo $result[0]["tgl_pinjam"] ?>" required>

                                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control mb-3" value="<?php if (isset($_GET['id_peminjaman']))
                                                                                                                            echo $result[0]["tgl_kembali"] ?>" required>

                                <label for="id_buku">Judul Buku:</label><br>
                                <select id="id_buku" name="id_buku">
                                    <?php
                                    if (!isset($_GET['id_peminjaman'])) { ?>
                                        <option disabled selected></option>
                                    <?php
                                    }
                                    foreach ($dataBuku as $barisBuku) {
                                        $selected = '';
                                        if (
                                            isset($_GET['id_peminjaman']) && $hasil[0]['id_buku'] ==

                                            $barisBuku['id_buku']
                                        ) {

                                            $selected = 'selected';
                                        }
                                    ?>
                                        <option value="<?php echo $barisBuku['id_buku']; ?>" <?php echo $selected; ?>><?php echo $barisBuku['judul_buku']; ?></option>
                                    <?php } ?>
                                </select>
                                <br><br>

                                <label for="id_member">Nama Member:</label><br>
                                <select id="id_member" name="id_member">
                                    <?php
                                    if (!isset($_GET['id_peminjaman'])) { ?>
                                        <option disabled selected></option>
                                    <?php
                                    }
                                    foreach ($dataMember as $barisMember) {
                                        $selected = '';
                                        if (
                                            isset($_GET['id_peminjaman']) && $hasil[0]['id_member'] ==

                                            $barisMember['id_member']
                                        ) {

                                            $selected = 'selected';
                                        }
                                    ?>
                                        <option value="<?php echo $barisMember['id_member']; ?>" <?php echo $selected; ?>><?php echo $barisMember['nama_member']; ?></option>
                                    <?php } ?>
                                </select>
                                <br><br>

                                <?php
                                if (isset($_GET['id_peminjaman'])) {
                                    echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"update\"> Update </button>";
                                } else {
                                    echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"tambah\"> Tambah </button>";
                                }
                                ?>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>