<?php

    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("SELECT pk_livro, nome_livro, subtitulo_livro,
    data_lancamento_livro, quantidade_paginas_livro, fk_genero
    FROM livro WHERE pk_livro = ? ;");

    $comando->execute([$codigo]);

    if ($comando->rowCount() >= 1){

        $livro = $comando->fetch();

    }else{
        echo 'Não há livro cadastrado com este código!';
    }
?>