<?php

require_once "../controller/ControllerCadastro/NotesController.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar</title>
</head>
<body>

<form method="post" action="">
    <label>Titulo
        <input type="text" name="title"/>
    </label><br>
    <label> Descrição
        <input type="text" name="description"/>
    </label><br>
    <div class="form-group">
        <button type="submit" class="btn btn-success" id="cadastrar">Adicionar
        </button>
    </div>
</form>


</body>
</html>

