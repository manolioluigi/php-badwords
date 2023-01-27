<?php

    $text = $_GET['text'];
    $censura = $_GET['censura'];
    $testo_censurato = str_replace($censura,'***',$text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>
<body>

    <p>
        <?php 
            echo $text." ".strlen ($text);
        ?>
    </p>
    <p>
        <?php
            echo $testo_censurato." ".strlen($testo_censurato);
        ?>
    </p>
    
</body>
</html>