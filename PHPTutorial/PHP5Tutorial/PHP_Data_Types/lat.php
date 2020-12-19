<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
//    $x = "Hello world!";
//    $y = 'Hello world!';
   
//    echo $x;
//    echo "<br>";
//    echo $y;
//   

//    <!-- var dump -->
//    $x = 10.365;
//    var_dump($x);

//PHP Array
// $cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a ". $this->color . " ". $this->model . "!";
    }
}
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
   ?>
</body>
</html>