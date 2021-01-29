<!DOCTYPE html>
<html>

<body>
    <?php
    // $umur = array("asep" => 20, "faris" => 6, "rahma" => 7);
    // $karib = array("lana" => 22, "fajar" => 22, "haryanto" => 20);
    // echo json_encode($umur) . "<br>";
    // echo json_encode($karib);

    $jsonobj = '{"rudi":35,"bento":37,"dalim":43}';

    $obj = json_decode($jsonobj);

    // echo $obj->rudi;
    // echo $obj->bento;
    // echo $obj->dalim;

    foreach ($obj as $aran => $value) {
        echo $aran . " => " . $value . "<br>";
    }
    ?>
</body>

</html>