<?php

    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("SELECT pk_album, nome_album, total_musica_album,
    data_lancamento_album, tempo_duracao_album, fk_banda
    FROM album WHERE pk_album = ? ;");

    $comando->execute([$codigo]);

    if ($comando->rowCount() >= 1){

        $album = $comando->fetch();

    }else{
        echo 'Não há álbum cadastrado com este código!';
    }
?>
