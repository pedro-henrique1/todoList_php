<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Criar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background-color: #393e46">

    <form method="post" action="/NotesRepository.php" autocomplete="off">
        <div class="row" style="margin: 20px 20px">
            <div class="col">
                <label>
                    <input type="text" name="title" class="form-control" placeholder="Titulo">
                </label>
            </div>
            <div class="col">
                <label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição">
                </label>
            </div>
        </div>
        <button style="margin: 30px" type="submit" class="btn btn-success">Adicionar</button>
    </form>


</body>

</html>