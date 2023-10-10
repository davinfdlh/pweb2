<?php
include "../classes/database.php";
session_start(); // Mulai session

$db = new Database;

$alertMessage = ""; // Inisialisasi pesan alert

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

if ($aksi == "tambah") {
    // Proses tambah data mahasiswa
    $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

    $result = $db->addMahasiswa($nim, $nama, $alamat);

    if ($result) {
        // Data berhasil ditambahkan, set pesan alert success
        $alertMessage = '<div class="alert alert-success" role="alert">Data berhasil ditambahkan.</div>';
    } else {
        // Terjadi kesalahan, set pesan alert error
        $alertMessage = '<div class="alert alert-danger" role="alert">Terjadi kesalahan. Data tidak dapat ditambahkan.</div>';
    }
} else if ($aksi == "hapus") {
    // Proses hapus data mahasiswa
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $result = $db->deleteMahasiswa($id);

    if ($result) {
        // Data berhasil dihapus, set pesan alert success
        $alertMessage = '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>';
    } else {
        // Terjadi kesalahan, set pesan alert error
        $alertMessage = '<div class="alert alert-danger" role="alert">Terjadi kesalahan. Data tidak dapat dihapus.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                        <a class="nav-link" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dosen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tampilkan pesan alert di sini -->
    <?php echo $alertMessage; ?>

    <div style="display: flex; justify-content: center; align-items: center;">
        <div style="width: 97%; margin-top: 25px;">
            <h3>Data Mahasiswa</h3>
            <a href="tambah_mhs.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
            <table class="table table-striped" style="margin-top: 20px;">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>

                <?php

                if (!empty($db->getMahasiswa())) {
                    $no = 1;
                    foreach ($db->getMahasiswa() as $mahasiswa) { ?>
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $no++ ?></td>
                            <td style="vertical-align: middle;"><?php echo $mahasiswa['nim'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $mahasiswa['nama'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $mahasiswa['alamat'] ?></td>
                            <td style="vertical-align: middle;">
                                <a style="text-decoration: none;" href="edit_mhs.php?id=<?php echo $mahasiswa['id'] ?>" class="btn btn-warning">Edit</a>
                                <a style="text-decoration: none;" href="proses_mhs.php?aksi=hapus&id=<?php echo $mahasiswa['id'] ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                <?php
                    }
                } ?>
            </table>

            <?php if (empty($db->getMahasiswa())) { ?>
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
