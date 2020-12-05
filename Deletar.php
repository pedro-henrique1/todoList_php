
<?php

require_once "./connection.php";
require_once "models/UserMysql.php";
require_once "models/TodoInsert.php";

?>


<?php

$todo = new UserMysql($pdo);

$id = filter_input(INPUT_GET, "id");

if ($id) {
    $todo->delete($id);
}

header("Location: index.php");
exit();




