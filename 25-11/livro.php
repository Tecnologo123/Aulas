<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <p class="h3">Cadastro de livros.</p>
        <form action="inserir_livro.php" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Título</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="col">
                         <label>Subtitulo:</label>
                         <input type="text" name="subtitulo" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Data de Lançamento:</label>
                        <input type="date" name="data" class="form-control">
                    </div>
                    <div class="col">
                        <label>Quantidade de Páginas:</label>
                        <input type="number" name="paginas" class="form-control">
                    </div>
                    <div class="col">
                        <label>Gênero:</label>
                        <select name="genero" class="form-select">
                            <?php
                                include("listar_generos.php");
                                if(!empty($lista_generos)){
                                    foreach($lista_generos as $linha){
                                        echo '
                                        <option value="'.$linha['pk_genero'].'">'.$linha['nome_genero'].'</option>
                                        ';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center align-items-centers">
                    <div class="col-mx-auto text-center m-5">
                        <input type="submit" value="Cadastrar" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col">
            </div>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-success">
                        <tr>
                            <th> Código </th>
                            <th> Nome </th>
                            <th> Subtítulo </th>
                            <th> Data </th>
                            <th> Número de páginas </th>
                            <th> Gênero </th>
                            <th colspan="2"> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("listar_livros.php");
                            if(!empty($lista_livros)){
                            foreach($lista_livros as $linha){
                                echo ' <tr>
                                           <td> '.$linha['pk_livro'] .' </td>
                                           <td> '.$linha['nome_livro'] .' </td>
                                           <td> '.$linha['subtitulo_livro'] .' </td>
                                           <td> '.$linha['data_lancamento_livro'] .' </td>
                                           <td> '.$linha['quantidade_paginas_livro'] .' </td>
                                           <td> '.$linha['nome_genero'] .' </td>
                                           <td> <a href="excluir_livro.php?codigo='.$linha['pk_livro'].'"> <img src="icones/excluir.png" height="20px" width="20px"> <a> </td>
                                           <td> <a href="visualizar_livro.php?codigo='.$linha['pk_livro'].'"> <img src="icones/editar.png" height="20px" width="20px"> <a> </td>
                                       </tr> 

                                ';
                            }
                            }
                        ?>
                    </tbody>
                </table>        
    </div>            
</html>