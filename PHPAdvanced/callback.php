<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function gegero($str)
    {
        return $str . " ganteng <br>";
    }

    function undang($str)
    {
        return $str . " anu kasep";
    }

    function printFormatted($str, $format)
    {
        echo $format($str);
    }

    printFormatted("Hello asep", "gegero");
    printFormatted("Hello asep", "undang");
    ?>
</body>

</html>