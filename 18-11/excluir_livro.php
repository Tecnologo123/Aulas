<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("DELETE FROM livro WHERE pk_livro = ?");
    $comando->execute([$codigo]);

    header("location:livro.php");
?>