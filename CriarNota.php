<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Criar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background-color: #393e46; color: #fff ">

  <header>
    <h1 class="text-center mt-5">Criar</h1>
  </header>
  <main>
    <form action=" /NotesRepository.php" autocomplete="off" method="post" class="m-5">
      <div class="form-group">
        <label for="Titulo">titulo</label>
        <input type="text" name="title" id="Titulo" class="form-control" placeholder="digite o titulo">
      </div>

      <div class="form-group mt-2">
        <label for="Description">descrição</label>
        <textarea class="form-control " name="description" id="Description" rows="3" style=" height: 200px !important;"
          placeholder="Digite sua descrição"></textarea>
      </div>

      <button type="button" class="btn btn-success w-50">Criar</button>
    </form>
  </main>

</body>

</html>