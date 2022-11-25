<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT * FROM autor;");
    $comando->execute();

    if($comando->rowCount() >= 1 ){

        $lista_autores = $comando->fetchAll();

    }else{
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
        Não há autores cadastrados!
      </div>';
    }

    unset($pdo);
    unset($comando);

?>