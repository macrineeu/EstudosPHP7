<?php

    header("Content-Type: image/png");
    //cria imagem
    $image = imagecreate(256, 256);

    $black = imagecolorallocate($image, 0, 0, 0);

    $red = imagecolorallocate($image, 255, 0, 0);

    imagestring($image, 5, 60, 120, "CURSO PHP 7", $red);

    imagepng($image);

?>