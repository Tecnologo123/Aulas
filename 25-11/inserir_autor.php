<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nacionalidade = $_POST['nacionalidade'];
    $email = $_POST['email'];

    $comando = $pdo->prepare("INSERT INTO autor (nome_autor, sobrenome_autor, nacionalidade_autor, email_autor) VALUE(?,?,?,?)");

    $comando->execute([$nome,$sobrenome,$nacionalidade,$email]);

    unset($comando);
    unset($pdo);

    header("location:autor.php");

?>