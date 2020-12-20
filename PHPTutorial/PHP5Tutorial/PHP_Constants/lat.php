<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
  <?php
//   define("Greeting", "Assalamulaikum");
//   echo Greeting;

//Constant Array
// define("keluarga", [
//     "Musrawi",
//     "BMW", "Toyota"
// ]);
// echo keluarga[2];

//Constant are Global
define("keluarga", "Selamat datang di kelurga saya!");
function myTest() {
    echo keluarga;
}
myTest();
  ?>  
</body>
</html>