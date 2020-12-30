<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_VALIDATION</title>
</head>
<body>
<?php
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

}
?>

<h2>Belajar Membuat Form Dengan PHP</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Nama : <input type="text" name="name">
<br><br>
Email : <input type="text" name="email">
<br> <br>
Website : <input type="text" name="website">
<br> <br>
Alamat : <textarea name="comment" cols="40" rows="5"></textarea>
<br> <br>
Jenis Kelamin : <input type="radio" name="gender" value="pria">Pria
<input type="radio" name="gender" value="wanita">Wanita
<br><br>
<input type="submit" name="submit" value="Kirim">


<?php
echo "<h2>Detail data yang anda masukkan :</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";

?>
</form>
</body>
</html>