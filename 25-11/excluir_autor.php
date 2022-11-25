<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("DELETE FROM autor WHERE pk_autor = ?");
    $comando->execute([$codigo]);

    header("location:autor.php");
?>