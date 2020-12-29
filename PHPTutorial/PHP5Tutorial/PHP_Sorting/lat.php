<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
    $nomor = array(4, 6, 3, 33, 22, 2, 1);
    ksort($nomor);

    $arrlength = count($nomor);
    for($x = 0; $x < $arrlength; $x++) {
        echo $nomor[$x];
        echo "<br>";
    }

    $umur = array("Dono"=>"13", "Karto"=>"20", "Rasim"=>"17");
    arsort($umur);

    foreach($umur as $x => $x_usia){
        echo "Saya=" . $x,  ", Usia = " . $x_usia;
        echo "<br>";
    }
    ?>
</body>
</html>