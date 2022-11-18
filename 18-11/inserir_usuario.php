<?php
    include_once("conexao.php");  

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $comando = $pdo->prepare("INSERT INTO livro (email_usuario, senha_usuario) VALUE(?,?,?,?,?)");

    $comando->execute([$email,$senha]);

    unset($comando);
    unset($pdo);

    header("location:usuario.php");

?>