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
<div class="container-fluid">
        <p class="h3">Cadastro de gênero.</p>
        <form action="inserir_genero.php" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="row justify-content-center align-items-centers">
                        <div class="col-mx-auto text-center m-5">
                            <input type="submit" value="Cadastrar" class="btn btn-success">
                    </div>
                </div>
            </div>
       </form>
    </div>            
</html>