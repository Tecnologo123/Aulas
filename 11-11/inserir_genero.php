<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];

    $comando = $pdo->prepare("INSERT INTO genero (nome_genero) VALUE(?)");

    $comando->execute([$nome]);

    unset($comando);
    unset($pdo);

    header("location:genero.php");


?>