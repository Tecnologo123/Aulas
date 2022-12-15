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
<body>
    <div class="container-fluid">
        <p class="h3">Edição de álbuns</p>
        <form>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Nome do álbum:</label>
                        <input type="text" name="nome" class="form-control" >
                    </div>
                    <div class="col">
                        <label>Selecione</label>
                        <select class="form-select" name="genero">
                            <option value="1">Rock</option>
                        </select>
                   </div>
                    <div class="col">
                         <label>Total de músicas:</label>
                         <input type="text" name="total de músicas" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Data de lançamento:</label>
                        <input type="date" name="data" class="form-control" >
                    </div>
                    <div class="col">
                        <label>Tempo de duração:</label>
                        <input type="text" name="tempo de duracao" class="form-control" >
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