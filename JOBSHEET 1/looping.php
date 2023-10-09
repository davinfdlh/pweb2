<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>

</head>
<body>
    <?php

    echo "Pengulangan FOR bilangan genap 1 hingga 10 </br>";        
for ($x=0;$x<=10;$x+=2)
    echo "$x </br>";

    echo "</br>Perulangan WHILE bilangan ganjil 1 hingga 10 </br>";
    $y=1;
    while($y<=10){
        echo "$y </br>";
        $y+=2;
    }
    echo "</br>Bilangan prima kurang dari 20: </br>";
    
    $num = 2;
    
    do {
        $prima = true;
        
        if ($num <= 1) {
            $prima = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $prima = false;
                    break;
                }
            }
        }
        
        if ($prima) {
            echo $num . " </br>";
        }
        
        $num++;
    } while ($num < 20);

    
    ?>
</body>
</html>