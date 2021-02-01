<?php
    
    require_once"config.php";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    $id = 1;

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Excluido com Sucesso!";

?>