<!DOCTYPE html>
<html>

<body>
    <?php
    // $int = 122;
    // $min = 1;
    // $max = 123;
    // if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $max))) === false) {
    //     echo ("Variabel value is not within the legal range");
    // } else {
    //     echo ("Variable value is within the legal range");
    // }

    $url = "https://www.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === true) {
        echo ("$url is a valid URL");
    } else {
        echo ("$url is not a valid URL");
    }
    ?>
</body>

</html>