<?php

require_once "vendor/autoload.php";


require_once "./connection.php";
require_once "models/TodoInsert.php";
require_once "models/UserMysql.php";


$todo = new UserMysql($pdo);
$id = filter_input(INPUT_GET, 'id');


if ($id) {
  $user = $todo->findById($id);
} else {
  header("Location: CriarNota.php");
  exit();
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/index.css">
</head>

<body style="background-image: linear-gradient( 100.5deg,  rgba(148,146,236,1) 17.7%, rgba(245,194,194,1) 76.1% );">
  <header>
    <h1 class="d-flex  justify-content-center">Editar</h1>
  </header>
  <main>
    <div class="container ">
      <form method="POST" class="m-5  " action="EditRepository.php" autocomplete="off">
        <div>
          <input type="hidden" name="id" value="<?php echo $user->getId(); ?>">
          <div class="form-group">
            <label for="idTitle">Titulo</label>
            <input type="text" name="title" id="idTitle" class="form-control" value="<?php echo $user->getTitle()  ?>">
          </div>

          <div class="form-group">
            <label for="idDescription">Descrição</label>
            <textarea class="form-control" style="height: 200px;" name="description" id="idDescription"
              rows="3"><?php echo $user->getDescription()   ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Salvar
          </button>
      </form>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>