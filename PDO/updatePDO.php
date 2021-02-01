<?php
    
    require_once"config.php";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    $login = "José Silverio";
    $password = "25833";
    $id = 2;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Alterado com Sucesso!";

?>