<?php

    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("SELECT pk_autor, nome_autor, sobrenome_autor, 
    nacionalidade_autor, email_autor FROM autor WHERE pk_autor = ? ;");

    $comando->execute([$codigo]);

    if ($comando->rowCount() >= 1){

        $autor = $comando->fetch();

    }else{
        echo 'Não há autor cadastrado com este código!';
    }
?>