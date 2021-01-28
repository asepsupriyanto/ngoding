<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            function checkNum($number)
            {
                if ($number > 1) {
                    throw new Exception("Value must be 1 or below");
                }
                return true;
            }

            try {
                checkNum(2);
                echo 'If you see this, the number is 1 or below';
            } catch (Exception $e) {
                echo 'Message: ' . $e->getMessage();
            }
            //         
            ?> -->

    <!-- <?php
            class customException extends Exception
            {
                public function errorMessage()
                {
                    $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
                        . ' : <br>' . $this->getMessage() . '</b> is not a valid E-mail address';
                    return $errorMsg;
                }
            }
            $email = "someone@example...com";

            try {
                if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                    throw new customException($email);
                }

                // double exception
                if (strpos($email, "example") !== FALSE) {
                    throw new Exception("$email is an example e-mail");
                }
            } catch (customException $e) {

                echo $e->errorMessage();
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            ?> -->




    <?php
    class customException extends Exception
    {
        public function errorMessage()
        {
            $errorMsg = $this->getMessage() . ' is not a valid e-mail address. ';
            return $errorMsg;
        }
    

    $email = "asepspry12@gmail.com";
    try {
        try {
            if (strpos($email, "example") !== FALSE) {
                throw new Exception($email);
            }
        } catch (Exception $e) {
            throw new customException($email);
        }
    } catch (customException $e) {
        echo $e->errorMessage();
    }

    ?>

    <?php
    function myException($exception)
    {
        echo "<b>Exception:</b>" . $exception->getMessage();
    }

    set_exception_handler('myException');

    throw new Exception('uncaught exception occured');
    ?>
</body>

</html>