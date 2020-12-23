<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // for ($x = 0; $x < 10; $x++) {
    //     if ($x == 8 ){
    //         continue;
    //        // break;
    //     }
    //     echo "Nomor $x <br>";
    // }

    $x = 0;
    while($x < 10) {
        if ($x == 4) {
            // break;
            $x++;
            continue;
        }
        echo "Nomor $x <br>";
        $x++;
    }
    ?>
</body>
</html>