
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álbuns</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <p class="h3">Visualização de álbuns.</p>
        <div class="row">
            <div class="col">
            </div>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-success">
                        <tr>
                            <th> Código </th>
                            <th> Nome do álbum </th>
                            <th> Nome da banda </th>
                            <th> Total de músicas </th>
                            <th> Data de lançamento </th>
                            <th> Tempo de duração</th>
                            <th colspan="2"> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("../source/listar_albuns.php");
                            if(!empty($listar_albuns)){
                            foreach($listar_albuns as $linha){
                                echo ' <tr>
                                           <td> '.$linha['pk_album'] .' </td>
                                           <td> '.$linha['nome_album'] .' </td>
                                           <td> '.$linha['total_musica_album'] .' </td>
                                           <td> '.$linha['data_lancamento_album'] .' </td>
                                           <td> '.$linha['tempo_duracao_album'] .' </td>
                                           <td> '.$linha['nome_banda'] .' </td>
                                           <td> <a href="excluir_album.php?codigo='.$linha['pk_album'].'"> <img src="../image/excluir.png" height="20px" width="20px"> <a> </td>
                                           <td> <a href="visualizar_album.php?codigo='.$linha['pk_album'].'"> <img src="../image/editar.png" height="20px" width="20px"> <a> </td>
                                       </tr> 

                                ';
                            }
                            }
                        ?>
                  
                    </tbody>
                </table>        
    </div>            
</html>