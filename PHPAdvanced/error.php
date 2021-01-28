<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // if (!file_exists("welcome.txt")) {
    //     die("file not found");
    // } else {
    //     $file = fopen("welcome.txt", "r");
    // }

    function customError($errno, $errstr)
    {
        echo "<br>Error:</b> [$errno] $errstr<br>";
    }
    set_error_handler("customError");

    echo ($test);



    ?>
</body>

</html>