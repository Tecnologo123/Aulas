<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT * FROM banda;");
    $comando->execute();

    if($comando->rowCount() >= 1 ){

        $listar_bandas = $comando->fetchAll();

    }else{
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
        Não há bandas cadastradas!
      </div>';
    }

    unset($pdo);
    unset($comando);

?>