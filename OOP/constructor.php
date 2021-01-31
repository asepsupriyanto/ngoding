<html>

<body>
    <?php
    class elektronik
    {
        public $name;
        public $warna;

        function __construct($name, $warna)
        {
            $this->name = $name;
            $this->warna = $warna;
        }
        function get_name()
        {
            return $this->name;
        }

        function get_warna()
        {
            return $this->warna;
        }
    }

    $laptop = new elektronik("laptop", " coklat");
    echo $laptop->get_name() . $laptop->get_warna();
    ?>
</body>

</html>