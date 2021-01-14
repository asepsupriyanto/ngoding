<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $perabotan = array
    (
        array("Sendok", 15,10),
        array("Centong", 10, 20),
        array("Piring", 10, 10),
        array("Garpu", 16, 10),
        array("Mangkok", 13, 15)
    );

    for ($nomor = 0; $nomor < 5; $nomor++) {
        echo "<p><b> Baris no. $nomor</b>
        </p>";
        echo "<ul>";
        for ($kol = 0; $kol < 3; $kol++)
      {
          echo "<li>".$perabotan[$nomor][$kol]."
          </li>";
      }
      echo "</ul>";
    }
   ?>
</body>
</html>