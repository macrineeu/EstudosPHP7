<?php

    //Cria arquivo e abre no modo escrita
    $file = fopen("log.txt", "w+");

    //escreve no arquivo
    fwrite($file, date("Y-m-d"));

    //fecha o arquivo com as novas informações
    fclose($file);

    echo "Arquivo criado com sucesso!"

?>