<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        .error {color: #ff0000}
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $alamat = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "nama tidak sesuai";
        } else {
            $name = test_input($_POST["name"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "email tidak sesuai";
        }else{
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        }else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["alamat"])) {
            $alamat = "";

        }else {
            $alamat = test_input($_POST["alamat"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "jenis kelamin tidak sesuai";
        }else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Belajar Membuat Validasi dengan PHP</h2>
    <p><span class="error">* wajib diisi</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama : <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
            <BR></BR>
    Email: <input type="text" name="email"> 
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
    Website: <input type="text" name="website"> 
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
    Alamat: <textarea name="alamat" cols="40" rows="5"></textarea>
    <br><br>
    Jenis Kelamin: <input type="radio" name="gender" value="pria">Pria
                    <input type="radio" name="gender" value="wanita">Wanita
                    <span class="error">* <?php echo $genderErr;?></span>
                    <br> <br>
                    <input type="submit" name="submit" value="Kirim">
                    
    
    </form>
    <?php
    echo "<h2> Rincian Datamu: </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $alamat;
    echo "<br>";
    echo $gender;
    ?>
</body>
</html>