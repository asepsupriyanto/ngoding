<!DOCTYPE html>
<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // $conn = new mysqli($servername, $username, $password);
    // $conn = mysqli_connect($servername, $username, $password);

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // if (!$conn) {
    //     die("connection failed: " . mysqli_connect_error());
    // }

    // echo "Connected succcesfully";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection successfully";
    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }
    ?>
</body>

</html>