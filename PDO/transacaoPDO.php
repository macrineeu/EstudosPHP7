<?php
    
    require_once"config.php";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

    $id = 2;

    $stmt->execute(array($id));

    //$conn->rollBack();

    $conn->commit();

    echo "Deletado com Sucesso!";

?>