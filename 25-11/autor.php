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
        <p class="h3">Cadastro do autor.</p>
        <form action="inserir_autor.php" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="col">
                         <label>Sobrenome:</label>
                         <input type="text" name="sobrenome" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Nacionalidade:</label>
                        <input type="text" name="nacionalidade" class="form-control">
                    </div>
                    <div class="col">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control">
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
                            <th> Sobrenome </th>
                            <th> Nacionalidade </th>
                            <th> Email </th>
                            <th colspan="2"> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("listar_autores.php");
                            if(!empty($lista_autores)){
                            foreach($lista_autores as $linha){
                                echo ' <tr>
                                           <td> '.$linha['pk_autor'] .' </td>
                                           <td> '.$linha['nome_autor'] .' </td>
                                           <td> '.$linha['sobrenome_autor'] .' </td>
                                           <td> '.$linha['nacionalidade_autor'] .' </td>
                                           <td> '.$linha['email_autor'] .' </td>
                                           <td> <a href="excluir_autor.php?codigo='.$linha['pk_autor'].'"> <img src="icones/excluir.png" height="20px" width="20px"> <a> </td>
                                           <td> <a href="visualizar_autor.php?codigo='.$linha['pk_autor'].'"> <img src="icones/editar.png" height="20px" width="20px"> <a> </td>
                                       </tr> 

                                ';
                            }
                            }
                        ?>
                    </tbody>
                </table>        

    </div>            
</html>