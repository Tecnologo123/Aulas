<?php
include_once("conexao.php");

    $nome = $_POST['nome'];
    $integrantes = $_POST['numero_integrantes'];
    $anoformacao = $_POST['ano_formacao'];
    $albunslancados = $_POST['total_albuns_lancados'];
    $genero = $_POST['genero'];

    $comando = $pdo->prepare("INSERT INTO banda (nome_banda, numero_integrantes_banda, ano_formacao_banda, total_albuns_banda, fk_genero) VALUE(?,?,?,?,?)");

    $comando->execute([$nome,$integrantes,$anoformacao,$albunslancados,$genero]);

    unset($comando);
    unset($pdo);

    header("location:../pages/cadastroBandas.html");

?>

