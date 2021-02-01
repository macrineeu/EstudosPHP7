<?php

    $name = "images";

    if (!is_dir($name)){

        mkdir($name);
        echo "Diretorio Criado com sucesso";

    }else{

        rmdir($name);
        echo "Já existe este diretorio: $name foi removido";

    }

?>