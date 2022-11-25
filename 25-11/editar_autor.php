<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nacionalidade = $_POST['nacionalidade'];
    $email = $_POST['email'];

    $comando = $pdo->prepare("UPDATE autor SET nome_autor = ?, sobrenome_autor = ?, 
    nacionalidade_autor = ?, email_autor = ? WHERE pk_autor = ?");
    $comando->execute([$nome, $sobrenome, $nacionalidade, $email, $codigo]);

    header("location:autor.php");
?>