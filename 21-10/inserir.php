<?php
    include_once("conexao.php");

    $nome = '';
    $subtitulo = '';
    $data = '';
    $paginas = '';
    $genero = '';

    if(!isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }
    if(!isset($_POST['subtitulo'])){
        $subtitulo = $_POST['subtitulo'];
    }
    if(!isset($_POST['data'])){
        $data = $_POST['data'];
    }
    if(!isset($_POST['paginas'])){
        $paginas = $_POST['paginas'];
    }
    if(!isset($_POST['genero'])){
        $genero = $_POST['genero'];
    }

    $comando = $pdo->prepare("INSERT INTO livro (nome_livro, subtitulo_livro, data_lancamento_livro, quantidade_paginas_livro, fk_genero) VALUE(?,?,?,?,?)");

    $comando->execute([$nome,$subtitulo,$data,$paginas,$genero]);

    $unset($comando);
    $unset($pdo);

?>