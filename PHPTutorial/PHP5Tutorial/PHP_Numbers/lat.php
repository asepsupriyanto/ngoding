<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // integer
    // $x = 5985;
    // var_dump(is_int($x));

    // $x = 59.85;
    // var_dump(is_int($x));

    //float
    // $x = 10.365;
    // var_dump(is_float($x));

    //infinite
    // $x = 1.9e411;
    // var_dump($x);

    //nan
    // $x = acos(8);
    // var_dump($x);

    //numerical strings
    // $x = 5985;
    // var_dump(is_numeric($x));

    // $x = "5985";
    // var_dump(is_numeric($x));

    // $x = "59.85" + 100;
    // var_dump(is_numeric($x));

    // $x = "Hello";
    // var_dump(is_numeric($x));

    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    ?>
</body>
</html>