<!-- <!DOCTYPE html>
<html>

<head>
	<title>CRUD PHP dan MySQLi</title>
</head>

<body> -->

	<!-- <h2>CRUD DATA MAHASISWA</h2>
	<br />
	<a href="index.php">KEMBALI</a>
	<br /> -->
	<?php
include 'header.php'
?>
<div class="container-fluid">
  <div class="row">
<?php
include 'sidebar.php'
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
	<br />
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "select * from mahasiswa where id='$id'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
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
	<?php
	}
	?>

</body>

</html>