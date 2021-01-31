<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class karib
    {
        public $nama;
        public $umur;

        function __construct($nama, $umur)
        {
            $this->nama = $nama;
            $this->umur = $umur;
        }
        function __destruct()
        {
            echo "{$this->nama} karyawan yang bekerja dikarib adalah Asep {$this->umur}, Haryanto, Lana, Fajar, Reza.";
        }
    }
    $umur = new karib("Nama", "20 tahun");
    ?>
</body>

</html>