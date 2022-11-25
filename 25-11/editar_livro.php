<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $nome = $_POST['nome'];
    $subtitulo = $_POST['subtitulo'];
    $data = $_POST['data'];
    $paginas = $_POST['paginas'];
    $genero = $_POST['genero'];

    $comando = $pdo->prepare("UPDATE livro SET nome_livro = ?, subtitulo_livro = ?, data_lancamento_livro = ?,
     quantidade_paginas_livro = ?, fk_genero = ? WHERE pk_livro = ?");
    $comando->execute([$nome, $subtitulo, $data, $paginas, $genero, $codigo]);

    header("location:livro.php");
?>