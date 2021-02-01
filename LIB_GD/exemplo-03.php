<?php

    $image = imagecreatefromjpeg("certificado.jpg");

    $titleColor = imagecolorallocate($image, 0, 0, 0);

    $gray = imagecolorallocate($image, 100, 100, 100);

    imagettftext ($image, 32, 0, 450, 150, $titleColor, "fonts" . DIRECTORY_SEPARATOR ."fonts" . DIRECTORY_SEPARATOR ."Bevan" 
    . DIRECTORY_SEPARATOR. "Bevan-regular.ttf", "CERTIFICADO" );
    imagettftext ($image, 32, 0, 440, 350, $titleColor, "fonts" . DIRECTORY_SEPARATOR ."fonts" . DIRECTORY_SEPARATOR ."Playball" 
    . DIRECTORY_SEPARATOR. "Playball-regular.ttf", "Matheus Macrineu");
    imagestring($image, 3, 440, 370, "Concluido em: ". date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");

    imagejpeg($image);

    imagedestroy($image);


?>