
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
<body class="text-bg-dark">

    <nav class="navbar navbar-info bg-info justify-content-start">
    <!-- Navbar content -->
    <a class="navbar-brand text-dark ms-2" href="cadastroBandas.php">Bandas</a>
    <a class="navbar-brand text-dark" href="cadastroAlbuns.php">Álbuns</a>
    </nav>
    <div class="container-fluid">
    
        <p class="h3">Visualização de álbuns.</p>
        <div class="row">
            <div class="col">
            </div>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-5">
            <?php
                            include("../source/listar_albuns.php");
                            if(!empty($listar_albuns)){
                            foreach($listar_albuns as $linha){
                                echo ' <div class="col">
                                <div class="card" style="width: 18rem;">
                                  <img width:"50px" class="card-img-top" src="'.$linha['capa_album'].'" alt="...">
                                  <div class="card-body">
                                  <h5 class="card-title">'.$linha['nome_banda'].'</h5>
                                  <p class="card-text">'.$linha['nome_album'].'</p>
                                  <a href="../source/excluir_album.php?codigo='.$linha['pk_album'].'" class="btn btn-info">Excluir </a>
                                  <a href="../pages/edicao_Albuns.php?codigo='.$linha['pk_album'].'" class="btn btn-info">Editar </a>
                                  
                                 </div>
                               </div>
                               </div>
                                ';                               ;
                            }
                            }
                        ?>    
            </div>
                    
                  
                         
    </div>            
</html>