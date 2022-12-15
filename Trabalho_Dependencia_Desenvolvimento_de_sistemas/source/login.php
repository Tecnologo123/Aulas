<?php

    include("conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $comando = $pdo->prepare("SELECT * FROM usuario WHERE email_usuario = ?;");

    $comando->execute([$email]);

    if($comando->rowCount() == 1){
        $usuario = $comando->fetch();

        if($senha == $usuario['senha_usuario']){
            header("location:../pages/visualizacaoAlbuns.php");
        }else{
            echo 'Senha inválida!';
        }

    }else{
        echo 'E-mail inválido!';
    }

?>