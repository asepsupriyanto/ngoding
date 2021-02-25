<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    abstract class ParentClass
    {
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass
    
        public function prefixName($name, $operator = ",", $greet = "Selamat")
        {
            if ($name == "Asep Supriyanto") {
                $prefix = "Bapak";
            } else if ($name == "X") {
                $prefix = "Ibu";
            } else {
                $prefix = "";
            }
            return "{$greet} {$prefix}{$operator} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("Asep Supriyanto");
    echo "<br>";
    echo $class->prefixName("X");
    ?>
</body>

</html>