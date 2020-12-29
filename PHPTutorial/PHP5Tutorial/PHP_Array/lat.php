<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
   <?php
//    $perabot = array("Sandal", "Sapatu", "Saroal", "Baju");
//    $arrlength = count ($perabot);

//    for($x = 0; $x < $arrlength; $x++){
//        echo $perabot[$x];
//        echo "<br>";
//    }

    //$age = array("Dono"=>"20", "Karto"=>"19", "Santo"=>"21");
    //echo "Dono umurnya" . $age['Dono'] . " tahun ";
   
   $umur = array("Dono"=>"20", "Karto"=>"17", "Supri"=>"31");

   foreach($umur as $x => $x_usia) {
       echo "Aku=" . $x .", umur=" . $x_usia;
       echo "<br>";
   }
   ?>
</body>
</html>