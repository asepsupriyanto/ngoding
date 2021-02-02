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
        public $name;
        protected $warna;
        private $weight;

        function set_name($n)
        {
            $this->name = $n;
        }

        protected function set_warna($n)
        {
            $this->warna = $n;
        }

        private function set_weight($n)
        {
            $this->weight = $n;
        }
    }



    $asep = new karib();
    $asep->set_name('asep');
    $asep->set_warna('hitam');
    $asep->set_weight('100kg');
    ?>
</body>

</html>