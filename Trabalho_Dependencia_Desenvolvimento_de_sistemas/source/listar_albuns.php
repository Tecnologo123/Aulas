<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT A.pk_album,A.nome_album,A.total_musica_album,
    A.data_lancamento_album, A.tempo_duracao_album, A.capa_album, B.nome_banda FROM album AS A
    inner join banda AS B
    on A.fk_banda = B.pk_banda;");
    
    $comando->execute();

    if($comando->rowCount() >= 1 ){

        $listar_albuns = $comando->fetchAll();

    }else{
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
        Não há álbuns cadastrados!
      </div>';
    }

    unset($pdo);
    unset($comando);


?>