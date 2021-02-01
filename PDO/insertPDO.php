<?php

    require_once"config.php";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");

    $login = "José";
    $password = "2589633";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Inserido com Sucesso!"


?>