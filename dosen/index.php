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
        <h1 class="h2">Data Dosen</h1>
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

      <h2>Tabel Dosen</h2>
      <a href="tambah.php">+ TAMBAH DOSEN</a>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIDN</th>
              <th scope="col">Nama</th>
              <th scope="col">Home Based</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Agama</th>
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
				<td style="vertical-align: middle;"><?php echo $d['home_based']; ?></td>
				<td style="vertical-align: middle;"><?php echo $d['tempat_lahir']; ?></td>
				<td style="vertical-align: middle;"><?php echo $d['tanggal_lahir']; ?></td>
				<td style="vertical-align: middle;"><?php echo $d['agama']; ?></td>
				<td style="vertical-align: middle;"><?php echo $d['alamat']; ?></td>
				<td>
					<a class="btn btn-info" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a class="btn btn-danger"href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
