<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $nome = $_POST['nome'];
    $totalmusicas = $_POST['total_musicas'];
    $datalancamento = $_POST['data'];
    $tempoduracao = $_POST['tempo_duracao'];
    $genero = $_POST['genero'];

    $comando = $pdo->prepare("UPDATE album SET nome_album = ?, total_musica_album = ?, data_lancamento_album = ?,
    tempo_duracao_album = ?, fk_banda = ? WHERE pk_album = ?");
    $comando->execute([$nome, $totalmusicas, $datalancamento, $tempoduracao, $genero, $codigo]);

    header("location:../pages/visualizacaoAlbuns.php"); 

?>