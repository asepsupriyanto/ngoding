<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $t = date("H");

    if ($t < "10") {
        echo "selamat pagi!"; 
    } elseif($t < "20") {
        echo"Semoga harimu menyenangkan!";
    } else {
        echo "Selamat Malam!";
    }
    ?>
</body>
</html>