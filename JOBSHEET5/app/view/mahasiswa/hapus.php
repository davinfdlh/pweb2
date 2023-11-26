<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $result=$mahasiswaController->deleteMahasiswa($id, $nim, $nama, $alamat );

    if ($result){
        header("location:../mahasiswa?message=succes");
    }else{
        echo "Gagal menghapus data";
    }
}