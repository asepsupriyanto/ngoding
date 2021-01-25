<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hari ini adalah " . date("Y/m/d") . "<br>";
        echo "Hari ini adalah " . date("Y.mcontr.d") . "<br>";
        echo "Hari ini adalah " . date("Y-m-d") . "<br>";
        echo "Hari ini adalah " . date("l");
        

    ?>
     2000-<?php echo date("Y"). "<br>";
     echo "The time is " . date("h:i:sa") . "<br>";

     date_default_timezone_set("America/New_York");
     echo "Sekarang jam " . date("h:i:sa") . "<br>";
     $d=mktime(11, 14, 54, 8, 12, 2014);
     echo "Data ini dibuat pada tanggal ". date("Y-m-d h:i:sa", $d) . "<br>";

     $d=strtotime("10:13am Januari 25 2021");
     echo "Data ini dibuat pada tanggal ". date("Y-m-d h:i:sa", $d) . "<br>";
    
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d1=strtotime("July 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "Ada " .$d2 . " Hari sampai tanggal 4 Juli" . "<br>";

    $startdate = strtotime("Monday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
    ?>
     
</body>
</html>