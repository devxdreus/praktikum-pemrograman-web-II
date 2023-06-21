<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-color: #ffffff;
        }

        .floating-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        .smaller-heading {
            font-size: 30px; 
        }

    </style>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Selamat datang di Perpustakaan</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="floating-container">
                    <h2>Daftar Buku</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="floating-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($buku as $key => $value): ?>
                                <tr>
                                    <td><?= $value['judul'] ?></td>
                                    <td><?= $value['penulis'] ?></td>
                                    <td><?= $value['penerbit'] ?></td>
                                    <td><?= $value['tahun_terbit'] ?></td>
                                    <td>
                                        
                                        <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>" class="btn btn-sm btn-outline-info">Edit</a>
                                        <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm('Hapus data ini?')" class="btn btn-sm btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3">
                <div class="col text-end">
                <a class="btn btn-outline-success" href="<?= base_url('/buku/create') ?>">Tambah Data</a>
                <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger">Logout</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
