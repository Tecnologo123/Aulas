<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("ALTER TABLE FROM genero WHERE pk_genero = ?");
    $comando->execute([$codigo]);

    header("location:genero.php");
?>