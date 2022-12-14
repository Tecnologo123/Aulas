<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro bandas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</head>
<body class=text-bg-dark>

    <nav class="navbar navbar-info- bg-info justify-content-start">
        <!-- Navbar content -->
        <a class="navbar-brand text-dark ms-2" href="cadastroAlbuns.php">Álbuns</a>
        <a class="navbar-brand text-dark" href="visualizacaoAlbuns.php">Visualização</a>
        </nav>
    <div class="container-fluid">
        <p class="h3">Cadastro de bandas</p>
        <form action="../source/inserir_banda.php" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Nome da banda:</label>
                        <input type="text" name="nome" class="form-control" >
                    </div>
                    <div class="col">
                         <label>Gênero:</label>
                         <select class="form-select" name="genero">
                            <?php
                            include("../source/listar_genero.php");
                            if(!empty($listar_genero)){
                                foreach($listar_genero as $linha){
                                    echo '
                                    <option value="'.$linha['pk_genero'].'">'.$linha['nome_genero'].'</option>
                                    ';
                                }
                            }
                        ?>
                         </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Número de integrantes:</label>
                        <input type="text" name="numero_integrantes" class="form-control" >
                    </div>
                    <div class="col">
                        <label>Ano da formação:</label>
                        <input type="text" name="ano_formacao" class="form-control" >
                    </div>
                    <div class="col">
                        <label>Total de álbuns lançados:</label>
                        <input type="text" name="total_albuns_lancados" class="form-control" >
                    </div>
                    <div class="row justify-content-center align-items-centers">
                        <div class="col-mx-auto text-center m-5">
                            <input type="submit" value="Cadastrar" class="btn btn-info">
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col">
            </div>       

    </div>            
</html>