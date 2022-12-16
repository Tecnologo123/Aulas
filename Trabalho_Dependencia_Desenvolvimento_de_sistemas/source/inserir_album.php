<?php
include_once("conexao.php");

    $nome = $_POST['nome'];
    $totalmusicas = $_POST['total_músicas'];
    $datalancamento = $_POST['data'];
    $tempoduracao = $_POST['tempo_duracao'];
    $genero = $_POST['genero'];

    $imagem = $_FILES['capa_album'];
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);

    $comando = $pdo->prepare("INSERT INTO album (nome_album, total_musica_album, data_lancamento_album, tempo_duracao_album, fk_banda, capa_album) VALUE(?,?,?,?,?,?)");

    $comando->execute([$nome,$totalmusicas,$datalancamento,$tempoduracao,$genero,$base64]);

    unset($comando);
    unset($pdo);

    header("location:../pages/cadastroAlbuns.php");

?>