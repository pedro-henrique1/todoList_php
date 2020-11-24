<?php


$title = $_POST["title"];
$description = $_POST["description"];
$data = date("d-m H:i");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar</title>
</head>
<body>

<form method="post" action="../../model/NotesRepository.php">
    <input type="hidden" name="title" value="<?php
    echo $title ?>"/>
    <input type="hidden" name="description" value="<?php
    echo $description ?>"/>
    <input type="hidden" name="date" value="<?php
    echo $data ?>"/>

</form>
</body>
</html>
<?php











