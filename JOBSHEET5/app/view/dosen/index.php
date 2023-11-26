<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="refresh" content="<?php echo $seconds;?>; URL='<?php echo $_SERVER['PHP_SELF'];?>'">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dosen">Dosen</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tampilkan pesan alert di sini -->
   <?php 
   if (isset($_GET["message"]))
   { ?>
    <div class="alert alert-success" role="alert">
                Data baru berhasil ditambahkan
                </div>


   <?php header("refresh:2;url=dosen"); }
   ?>

    <div style="display: flex; justify-content: center; align-items: center;">
        <div style="width: 97%; margin-top: 25px;">
            <h3>Data Dosen</h3>
            <a href="tambahdosen" class="btn btn-primary">+ Tambah Dosen</a>
            <table class="table table-striped" style="margin-top: 20px;">
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>

                <?php {
                    $no = 1;
                    foreach ($dosen as $dosen) { ?>
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $no++ ?></td>
                            <td style="vertical-align: middle;"><?php echo $dosen['nidn'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $dosen['nama'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $dosen['alamat'] ?></td>
                            <td style="vertical-align: middle;">
                                <a class="btn btn-warning" style="text-decoration: none;" href="editdosen/<?php echo $dosen['id'] ?> ">Edit</a>
                                <a class="btn btn-danger" style="text-decoration: none;" href="hapusdosen/<?php echo $dosen['id'] ?>" 
                                onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a>
                            </td>
                        </tr>
                <?php
                    }
                } ?>
            </table>

            <!-- <?php if (empty($dosen())) { ?> -->
                <h5>Data Kosong</h5>
            <?php } ?>
        </div>
    </div>

    <script>
        feather.replace();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
