<?php

require_once("../controller/ControllerCadastro/NotesController.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar</title>
</head>
<body>
<form method="post" action="../controller/ControllerCadastro/NotesController.php">
    <label>
        <input type="text" name="title"/>
    </label><br>
    <label>
        <input type="text" name="description"/>
    </label><br>
    <div class="form-group">
        <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
    </div>
</form>

</body>
</html>

