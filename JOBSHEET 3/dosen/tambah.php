<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<br/>
	<h3>TAMBAH DATA DOSEN</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>NIDN</td>
				<td><input type="number" name="nidn"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
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