<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $hp = "redmi";

    switch ($hp) {
        case "nokia";
        echo "Hp yang digunakanmu saat ini adalah nokia";
        break;
        case "realmi";
        echo "Hp yang digunakanmu saat ini adalaha realmi";
        break;
        case "oppo";
        echo "Hp yang digunakanmu saat ini adalah oppo";
        break;
        case "samsung";
        echo "Hp yang digunakanmu saat ini adalah samsung";
        default:
        echo "Hp yang digunakanmu saat ini bukan nokia, realmi, oppo ataupun samsung melainkan redmi!";
    }
    ?>

</body>
</html>