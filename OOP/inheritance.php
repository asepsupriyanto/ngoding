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
        public $warna;
        public function __construct($nama, $warna)
        {
            $this->nama = $nama;
            $this->warna = $warna;
        }
        public function intro()
        {
            echo " Namanya {$this->nama} berkulit {$this->warna}";
        }
    }

    class programmer extends karib
    {
        public function message()
        {
            echo "Siapa karyawan yang bekerja dibagian programmer di karib?";
        }
    }

    $programmer = new programmer("asep", "sawo matang");
    $programmer->message();
    $programmer->intro();
    ?>
</body>

</html>