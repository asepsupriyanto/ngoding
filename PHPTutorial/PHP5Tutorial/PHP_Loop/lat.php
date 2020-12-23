<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // while
    // $x = 5;

    // while($x <= 100){
    //     echo "Nomor $x<br>";
    //     $x+=5;
    // }

    //do while
    // $x = 6;
    // do {
    //     echo "Nomor $x<br>";
    //     $x++;
    // }while ($x <=5);
    
    //for loop
    // for ($x = 0; $x <= 100; $x+=10) {
    //     echo "Nomor $x <br>";
    // }

    $nama = array("asep"=>"20", "supri"=>"19", "ahmad"=>"6","faris"=>"6");

    foreach ($nama as $x => $val) {
        echo "$x = $val<br>";
    }
    ?>
</body>
</html>