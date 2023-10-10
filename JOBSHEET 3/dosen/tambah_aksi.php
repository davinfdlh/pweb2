<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into dosen values(0,'$nidn','$nama','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>