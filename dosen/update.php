<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$home_based = $_POST['home_based'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
// update data ke database
mysqli_query($koneksi,"update dosen set nidn='$nidn', nama='$nama', home_based='$home_based', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', agama='$agama', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>