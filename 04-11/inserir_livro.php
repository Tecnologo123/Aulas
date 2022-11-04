<?php
    include_once("conexao.php");  

    $nome = $_POST['nome'];
    $subtitulo = $_POST['subtitulo'];
    $data = $_POST['data'];
    $paginas = $_POST['paginas'];
    $genero = $_POST['genero'];
    
    $comando = $pdo->prepare("INSERT INTO livro (nome_livro, subtitulo_livro, data_lancamento_livro, quantidade_paginas_livro, fk_genero) VALUE(?,?,?,?,?)");

    $comando->execute([$nome,$subtitulo,$data,$paginas,$genero]);

    unset($comando);
    unset($pdo);

    header("location:livro.html");

?>