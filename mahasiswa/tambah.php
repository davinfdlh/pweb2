<!-- <!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body> -->
<?php
include 'header.php'
?>
<div class="container-fluid">
  <div class="row">
<?php
include 'sidebar.php'
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div> -->
      </div>
	<h2>TAMBAH DATA MAHASISWA</h2>
	<form method="post" action="tambah_aksi.php">
		<table>
		<tr>			
				<td>No</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>Laki Laki<input type="radio" name="jenis_kelamin"></td>
				<td>Perempuan<input type="radio" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
			<tr>
				<td></td>
				<td><a class="btn btn-danger" href="index.php">KEMBALI</a></td>
			</tr>		
		</table>
	</form>
</body>
</html>