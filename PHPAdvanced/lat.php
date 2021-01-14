<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fashion = array 
    (
        array("baju", 10,8),
        array("kemeja", 5,19),
        array("celana", 9, 10),
        array("boxer", 10,10),
    );

    echo $fashion[0][0].": stok :" .$fashion[0][1].", habis : ". $fashion[0][2].".<br>";
    echo $fashion[1][0].": stok :" .$fashion[1][1].", habis : ". $fashion[1][2].".<br>";
    echo $fashion[2][0].": stok :" .$fashion[2][1].", habis : ". $fashion[2][2].".<br>";
    echo $fashion[3][0].": stok :" .$fashion[3][1].", habis : ". $fashion[3][2].".<br>";
    ?>
</body>
</html>