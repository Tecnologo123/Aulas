<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("ALTER TABLE FROM livro WHERE pk_livro = ?");
    $comando->execute([$codigo]);

    header("location:livro.php");
?>