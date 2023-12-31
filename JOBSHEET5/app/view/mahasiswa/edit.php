<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData){
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $alamat);

            if ($result) {
                header("location:../mahasiswa?message=succes");
            } else {
                header("location:editmahasiswa");
            }
        }
    } else {
        echo "mahasiswa tidak ditemukan";
    }
}
?>
<h3>Edit Data Mahasiswa</h3>
<?php
if ($mahasiswaData) {
?>
    <form action="" method="post">
        <?php
        foreach ($mahasiswaData as $d => $value) {
        ?>
            <table border ="0">
                <tr>
                    <td width="100">
                    <?php
                    echo $d;
                    ?>
                    </td>
                    <td>
                        <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
            <?php
        }
            ?>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Simpan">
                </td>
            </tr>
            </table>
    </form>
<?php
} 
?>