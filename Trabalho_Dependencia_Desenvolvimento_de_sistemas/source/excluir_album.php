<?php
include("conexao.php");

$codigo = $_GET['codigo'];

$comando = $pdo->prepare("DELETE FROM album WHERE pk_album = ?");
$comando->execute([$codigo]);

header("location:../pages/visualizacaoAlbuns.php");

?>