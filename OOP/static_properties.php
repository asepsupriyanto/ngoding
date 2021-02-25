<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class jalma
    {
        public static $nama = 'asep_ganteng ';
    }
    class aran extends jalma
    {
        public function sebutan()
        {
            return parent::$nama;
        }
    }

    echo aran::$nama;
    $aran = new aran();
    echo $aran->sebutan();

    ?>
</body>

</html>