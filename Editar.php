<?php
require_once "./connection.php";


$info = [];
$id = $_GET["id"];



if ($id) {
    $sql = $pdo->prepare("SELECT * FROM todo WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    if ($sql->rowCount()){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
}else {
    header("Location: /index.php");
    exit();
}

?>


<form method="post" action="/EditRepository.php" autocomplete="off">
    <div class="row" style="margin: 20px 20px">
        <input type="hidden" name="id" value="<?php echo $info['id'] ?>">
        <div class="col">
            <label>
                <input type="text" name="title" class="form-control" value="<?php echo $info["title"]  ?>">
            </label>
        </div>
        <div class="col">
            <label>
                <input type="text" name="description" class="form-control" value="<?php echo $info["description"]  ?>">
            </label>
        </div>
    </div>
    <button style="margin: 30px" type="submit" class="btn btn-success">Adicionar</button>
</form>
