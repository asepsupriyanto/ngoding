<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // function writeMsg(){
    //     echo "Assalamulaikum!";
    // }
    // writeMsg();

    // function familyName($name){
    //     echo "$name <br>";
    // }
    //     familyName("asep");
    //     familyName("supriyanto");
    //     familyName("Ahmad");
    //     familyName("faris");
    //     familyName("maulana");
    
    // function addNumbers (int $a, int $b) {
    //     return $a + $b;
    // }

    // echo addNumbers(5, "5 days");


    // function setHeight(int $minheight = 50) {
    //     echo "Tinggi : $minheight<br>";
    // }
    // setHeight(350);
    // setHeight();
    // setHeight(135);
    // setHeight(80);

    // function sum(int $x, int $y) {
    //     $z = $x +$y;
    //     return $z;
    // }

    // echo "5 + 10 =" . sum(5,10) . "<br>";
    // echo "7 + 13 =" . sum(7,13) . "<br>";
    // echo "2 + 4 =" . sum(2,4) . "<br>";


    function add_lima(&$nilai) {
        $nilai += 8;
    }

    $tilu = 3;
    add_lima($tilu);
    echo $tilu;
    ?>
</body>
</html>