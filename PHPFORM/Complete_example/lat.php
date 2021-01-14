
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $jkErr = $websiteErr = "";
$name = $email = $jk = $alamat = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Wajib diisi";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Spasi dan surat";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "E-mail wajib diisi";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "format tidak sesuai";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "format tidak sesuai";
    }    
  }

  if (empty($_POST["alamat"])) {
    $alamat = "";
  } else {
    $alamat = test_input($_POST["alamat"]);
  }

  if (empty($_POST["jk"])) {
    $jkErr = "jenis kelamin wajib diisi";
  } else {
    $jk = test_input($_POST["jk"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Belajar Validasi Menggunakan PHP</h2>
<p><span class="error">* wajib diisi </span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Nama: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Alamat: <textarea name="alamat" rows="5" cols="40"><?php echo $alamat;?></textarea>
  <br><br>
  Jenis Kelamin:
  <input type="radio" name="jk" <?php if (isset ($jk) && $jk=="wanita") echo "checked";?> value="wanita">Wanita
  <input type="radio" name="jk" <?php if (isset ($jk) && $jk=="pria") echo "checked";?> value="pria">Pria

  <span class="error">* <?php echo $jkErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Kirim">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $alamat;
echo "<br>";
echo $jk;
?>

</body>
</html>