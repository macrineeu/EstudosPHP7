<?php

    $file = fopen("text.txt", "w+");

    fclose($file);


    //DELETA O ARQUIVO
    unlink("text.txt");

    echo "ARQUIVO REMOVIDO COM SUCESSO!";

?>