<html>

<body>
    <?php
    class karib
    {

        public $nama;
        public $alamat;

        function set_name($nama)
        {
            $this->name = $nama;
        }
        function get_name()
        {
            return $this->name;
        }
    }


    $haryanto = new karib();
    var_dump($haryanto instanceof karib);
    ?>
</body>

</html>