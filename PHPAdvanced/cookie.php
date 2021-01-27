<?php
$cookie_name = "user";
$cookie_value = " supriyanto";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>
<html>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' Is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
    }

    // setcookie("user", "", time() - 3600);
    ?>
    <!-- <?php
            echo "cookie 'user' is deleted.";

            ?> -->
</body>

</html>

<!-- cookie enable -->
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>

<html>

<body>
    <?php
    if (count($_COOKIE) > 0) {
        echo "Cookie are enabled";
    } else {
        echo "Cookie are disbaled";
    }
    ?>
</body>

</html>