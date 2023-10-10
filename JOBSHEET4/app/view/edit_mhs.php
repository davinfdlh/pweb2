<?php
include "../classes/database.php";
$db = new Database;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
</head>

<body>
    <?php foreach ($db->edit($_GET['id']) as $mahasiswa) : ?>
        <div style="display: flex; justify-content: center; align-items: center;">
            <div style="width: 75%; margin-top: 50px;">
                <h3>Edit Mahasiswa</h3>
                <form style="margin-top: 30px;" action="proses_mhs.php?aksi=update" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIM</label>
                        <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id" value="<?php echo $mahasiswa['id'] ?>">
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="nim" value="<?php echo $mahasiswa['nim'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?php echo $mahasiswa['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"><?php echo $mahasiswa['alamat'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a class="btn btn-secondary" href="index.php">Batal</a>
                </form>
            </div>
        </div>
    <?php endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
