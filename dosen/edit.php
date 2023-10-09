<!-- <!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body> -->
 
	<!-- <h2>CRUD DATA DOSEN - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/> -->
	<?php
include 'header.php'
?>
<div class="container-fluid">
  <div class="row">
<?php
include 'sidebar.php'
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<br/>
	<h3>EDIT DATA DOSEN</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from dosen where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				
				<tr>
					<td>NIDN</td>
					<td><input type="number" name="nidn" value="<?php echo $d['nidn']; ?>"></td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Home Based</td>
					<td><input type="text" name="home_based" value="<?php echo $d['home_based'];?>"></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>
						<select name="agama">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Buddha">Buddha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</td>
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