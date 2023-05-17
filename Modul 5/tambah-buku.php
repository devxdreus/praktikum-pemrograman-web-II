<?php
include 'Koneksi.php';
include 'Model.php';
if (isset($_GET['id_buku'])) {
    editBuku();
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

        <?php $active = 'tambah-buku' ?>
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
                                <h1 style="text-align: center;" class="mt-2">Tambah Data Buku</h1>

                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input type="text" name="judul_buku" id="judul_buku" class="form-control mb-3" value="<?php if (isset($_GET['id_buku']))
                                                                                                                            echo $result[0]["judul_buku"] ?>" required>

                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" name="penulis" id="penulis" class="form-control mb-3" value="<?php if (isset($_GET['id_buku']))
                                                                                                                    echo $result[0]["penulis"] ?>" required>

                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" name="penerbit" id="penerbit" class="form-control mb-3" value="<?php if (isset($_GET['id_buku']))
                                                                                                                        echo $result[0]["penerbit"] ?>" required>

                                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control mb-3" value="<?php if (isset($_GET['id_buku']))
                                                                                                                                echo $result[0]["tahun_terbit"] ?>" required>

                                <?php
                                if (isset($_GET['id_buku'])) {
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