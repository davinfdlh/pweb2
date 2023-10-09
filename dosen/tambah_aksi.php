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
 
// menginput data ke database
mysqli_query($koneksi,"insert into dosen values('$id','$nidn','$nama','$home_based','$tempat_lahir','$tanggal_lahir','$agama','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>