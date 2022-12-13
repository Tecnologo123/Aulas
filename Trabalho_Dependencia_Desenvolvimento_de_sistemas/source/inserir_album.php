<?php
include_once("conexao.php");

    $nome = $_POST['nome'];
    $totalmusicas = $_POST['total_músicas'];
    $datalancamento = $_POST['data'];
    $tempoduracao = $_POST['tempo_duracao'];
    $genero = $_POST['genero'];

    $comando = $pdo->prepare("INSERT INTO album (nome_album, total_musica_album, data_lancamento_album, tempo_duracao_album, fk_banda) VALUE(?,?,?,?,?)");

    $comando->execute([$nome,$totalmusicas,$datalancamento,$tempoduracao,$genero]);

    unset($comando);
    unset($pdo);

    header("location:../pages/cadastroAlbuns.php");

?>