<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Goodbye
    {
        const LEAVING_MESSAGE = "Terimakasih telah bekunjung ke rumah kami:)";
        public function byebye()
        {

            echo self::LEAVING_MESSAGE;
            // echo Goodbye::LEAVING_MESSAGE;

        }
    }

    $goodby = new Goodbye();
    $goodby->byebye();
    ?>
</body>

</html>