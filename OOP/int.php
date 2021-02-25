<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    interface Hewan
    {
        public function makeSound();
    }

    class Maung implements Hewan
    {
        public function makeSound()
        {
            echo "Hauuuuung";
        }
    }

    class meong implements Hewan
    {
        public function makeSound()
        {
            echo "ngeeeong";
        }
    }

    $animal = new Maung();
    $animal->makeSound();
    echo "<br>";
    $animal = new meong();
    $animal->makeSound();
    ?>
</body>

</html>