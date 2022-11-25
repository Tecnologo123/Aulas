<?php

    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("SELECT pk_genero, nome_genero
    FROM genero WHERE pk_genero = ? ;");

    $comando->execute([$codigo]);

    if ($comando->rowCount() >= 1){

        $genero = $comando->fetch();

    }else{
        echo 'Não há gênero cadastrado com este código!';
    }
?>