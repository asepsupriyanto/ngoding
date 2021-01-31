<html>

<body>
    <?php
    class imah
    {
        public $nama;
        public $jk;

        function set_nama($nama)
        {
            $this->nama = $nama;
        }
        function get_nama()
        {
            return $this->nama;
        }

        function set_jk($jk)
        {
            $this->jk = $jk;
        }

        function get_jk()
        {
            return $this->jk;
        }
    }

    $asep = new imah();
    $jk = new imah();
    $faris = new imah();
    $asep->set_nama('Asep supriyanto');
    $faris->set_nama('Faris');
    $jk->set_jk('pria');


    echo $asep->get_nama() .  " jenis kelamin:" . $jk->get_jk();
    echo "<br>";
    echo $faris->get_nama() . " jenis kelamin:" . $jk->get_jk();
    ?>
</body>

</html>