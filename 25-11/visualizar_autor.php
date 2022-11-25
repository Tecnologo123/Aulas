<?php
    include("listar_autor.php");
?>
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
        <p class="h3">Edição do autor.</p>
        <form action="editar_autor.php?codigo=<?php echo $_GET['codigo'];?>" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $autor['nome_autor'];?>">
                    </div>
                    <div class="col">
                         <label>Sobrenome:</label>
                         <input type="text" name="sobrenome" class="form-control" value="<?php echo $autor['sobrenome_autor'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Nacionalidade:</label>
                        <input type="text" name="nacionalidade" class="form-control" value="<?php echo $autor['nacionalidade_autor'];?>">
                    </div>
                    <div class="col">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $autor['email_autor'];?>">
                    </div>
                    <div class="row justify-content-center align-items-centers">
                        <div class="col-mx-auto text-center m-5">
                            <input type="submit" value="Atualizar" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col">
            </div>       

    </div>            
</html>