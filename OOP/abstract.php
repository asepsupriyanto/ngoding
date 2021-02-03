<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    abstract class Car
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro(): string;
    }

    class Audi extends Car
    {

        public function intro(): string

        {
            return "Choose german quality! Im an $this->name!";
        }
    }

    class Volvo extends Car
    {
        public function intro(): string
        {
            return "Proud to be Swedish! Im an $this->name!";
        }
    }

    class Citroen extends Car
    {
        public function intro(): string
        {
            return "French extravagance! Im a $this->name!";
        }
    }

    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();
    echo "<br>";

    $volvo = new Volvo("Volvo");
    echo $volvo->intro();
    ?>


</body>

</html>