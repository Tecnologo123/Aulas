<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $nome = $_POST['nome'];

    $comando = $pdo->prepare("UPDATE genero SET nome_genero = ? WHERE pk_genero = ?");
    $comando->execute([$nome,$codigo]);

    header("location:genero.php");
?>