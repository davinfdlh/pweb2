<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="POST" action="">
        <!-- Input untuk bilangan -->
        <label for="bilangan">Masukkan Bilangan:</label>
        <input type="number" id="bilangan" name="bilangan">
        <input type="submit" value="Proses">
    </form>

    <?php
    // Cek apakah ada data yang dikirimkan melalui POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai bilangan dari formulir
        $x = $_POST["bilangan"];

        echo "Nilai X = $x <br>";
        
        if ($x > 0) {
            echo "$x adalah Bilangan Positif";
        } elseif ($x < 0) {
            echo "$x adalah Bilangan Negatif";
        } else {
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>
</body>
</html>
