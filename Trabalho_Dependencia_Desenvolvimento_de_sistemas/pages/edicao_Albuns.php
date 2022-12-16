<?php
include_once("../source/listar_album.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição álbuns</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</head>
<body class="text-bg-dark">

<nav class="navbar navbar-info bg-info justify-content-start">
    <!-- Navbar content -->
    <a class="navbar-brand text-dark ms-2" href="cadastroBandas.php">Bandas</a>
    <a class="navbar-brand text-dark ms-2" href="cadastroAlbuns.php">Álbuns</a>
    <a class="navbar-brand text-dark" href="visualizacaoAlbuns.php">Visualização</a>
    </nav>
    <div class="container-fluid">
        <p class="h3">Edição de álbuns</p>
        <form action="../source/editar_album.php?codigo=<?php echo $_GET['codigo'];?>"  method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Nome do álbum:</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $album['nome_album'];?>">
                    </div>
                    <div class="col">
                        <label>Selecione</label>
                        <select class="form-select" name="genero">
                        <?php
                                include("../source/listar_bandas.php");
                                if(!empty($listar_bandas)){
                                    foreach($listar_bandas as $linha){
                                        echo '
                                        <option value="'.$linha['pk_banda'].'">'.$linha['nome_banda'].'</option>
                                        ';
                                    }
                                }
                            ?>
                        </select>
                   </div>
                    <div class="col">
                         <label>Total de músicas:</label>
                         <input type="text" name="total_musicas" class="form-control" value="<?php echo $album['total_musica_album'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Data de lançamento:</label>
                        <input type="date" name="data" class="form-control" value="<?php echo $album['data_lancamento_album'];?>">
                    </div>
                    <div class="col">
                        <label>Tempo de duração:</label>
                        <input type="text" name="tempo_duracao" class="form-control"  value="<?php echo $album['tempo_duracao_album'];?>">
                    </div>
                    <div class="row justify-content-center align-items-centers">
                        <div class="col-mx-auto text-center m-5">
                            <input type="submit" value="Atualizar" class="btn btn-info">
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col">
            </div>       

    </div>            
</html>