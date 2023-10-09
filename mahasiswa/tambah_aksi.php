<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa (id,nama, nim, alamat, jenis_kelamin)  values('$id','$nama','$nim','$alamat','$jenis_kelamin')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>