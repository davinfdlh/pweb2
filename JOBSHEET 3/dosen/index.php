<?php
include 'header.php'
?>
<div class="container-fluid">
  <div class="row">

  <div style="display: flex; justify-content: center; align-items: center;">
  <div style="width: 75%; margin-top: 50px;">
      <h1 class="h2">Data Dosen</h1>
      <a class="btn btn-primary"href="tambah.php">+ TAMBAH DOSEN</a>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIDN</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
          <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from dosen");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td style="vertical-align: middle;"><?php echo $d['id']; ?></td>
				<td style="vertical-align: middle;"><?php echo $d['nidn']; ?></td>
				<td style="vertical-align: middle;"><?php echo $d['nama']; ?></td>
				<td style="vertical-align: middle;"><?php echo $d['alamat']; ?></td>
				<td>
					<a class="btn btn-warning" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a class="btn btn-danger"href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
          </tbody>
        </table>
      </div>
  </div>
  </div>
  </div>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
