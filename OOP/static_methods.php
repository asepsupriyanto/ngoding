<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            class Salam
            {
                public static function nyalam()
                {
                    echo "Assalamualaikum World!";
                }
                public function __construct()
                {
                    self::nyalam();
                }
            }

            class Salam1
            {
                public function message()
                {
                    greeting::nyalam();
                }
            }

            Salam::nyalam();
            ?> -->

    <?php
    class domain
    {
        protected static function getwebsiteName()
        {
            return "karib.co.id";
        }
    }

    class domainW3 extends domain
    {
        public $websiteName;
        public function __construct()
        {
            $this->websiteName = parent::getwebsiteName();
        }
    }

    $domainW3 = new domainW3;
    echo $domainW3->websiteName;
    ?>
</body>

</html>