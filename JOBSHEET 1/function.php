<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h2>Kalkulator Luas Persegi Panjang</h2>

    <form method="POST" action="">
        <label for="panjang">Panjang:</label>
        <input type="number" id="panjang" name="panjang"><br>

        <label for="lebar">Lebar<t/>:</label>
        <input type="number" id="lebar" name="lebar"><br>

        <input type="submit" value="Hitung">
    </form>

    <?php        
    function persegi_panjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = persegi_panjang($panjang, $lebar);
        echo "Luas Persegi Panjang dengan Panjang $panjang dan Lebar $lebar adalah $luas";
    }
    ?>
</body>
</html>
