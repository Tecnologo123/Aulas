<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT * FROM genero;");
    $comando->execute();

    if($comando->rowCount() >= 1 ){

        $listar_genero = $comando->fetchAll();

    }else{
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
        Não há gêneros cadastrados!
      </div>';
    }

    unset($pdo);
    unset($comando);

?>