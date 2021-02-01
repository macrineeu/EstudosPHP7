<?php

    $link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

    $content = file_get_contents($link);

    $parse = parse_url($link);
    //transforma url somente na parte descritiva da imagem (nome e tamanho)
    $basename = basename($parse["path"]);
 
    $file = fopen($basename, "w+");

    fwrite($file, $content);

    fclose($file);

?>

<img src="<?=$basename?>">