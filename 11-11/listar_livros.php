<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT L.pk_livro,L.nome_livro,L.subtitulo_livro,
    L.data_lancamento_livro, L.quantidade_paginas_livro, G.nome_genero FROM livro AS L
    inner join genero AS G
    on L.fk_genero = G.pk_genero;");
    
    $comando->execute();

    if($comando->rowCount() >= 1 ){

        $lista_livros = $comando->fetchAll();

    }else{
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
        Não há livros cadastrados!
      </div>';
    }

    unset($pdo);
    unset($comando);


?>