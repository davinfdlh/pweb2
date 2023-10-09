<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<style>
		.container {
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			align-items: center;
			height: 100vh;
		}
	</style>
</head>
<body>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<div class="alert alert-danger" role="alert">
			login gagal! username atau password yang anda masukan salah.
		  </div>';
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<form method="post" action="cek_login.php">
		<div class="container">
			<h2>LOGIN</h2>
			<div class="card">
				<table>
					<tr>
						<td>USERNAME <input type="text" name="username" placeholder="Masukkan username"></td>
					</tr>
					<tr>
						<td>PASSWORD <input type="password" name="password" placeholder="Masukkan password"></td>
					</tr>
					<tr>
						
						<td>&nbsp;<input type="submit" value="LOGIN"></td>
					</tr>
				</table>
			</div>
		</div>			
	</form>
</body>
</html>