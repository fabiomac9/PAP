<?php
$id = $_REQUEST['id'];
try {
    $stmt = $db->prepare('Select *, userstype.id as id, userstype.type as type from userstype where id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $arr = $stmt->fetchAll();

?>
    <div class="container">
        <form action="index.php?cmd=editartipoutilizadores&id=<?= $id ?>" method="post">
            <?php
            foreach ($arr as $key => $value) {
            ?>
                <tr>
                    <td>
                    <div class="form-group">
                            ID
                            <input type="text" class="form-control" id="id" value="<?= $value->id ?>" readonly>
                        </div>
                    </td>
                    <td>
                    <div class="form-group">
                            Tipo de Utilizador
                            <input type="text" class="form-control" name="type" value="<?= $value->type ?>">
                        </div>
                    </td>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="salvar" value="Salvar">
                        <input class="btn btn-secondary ml-2" type="reset" value="Reset">
                    </div>
                    </td>
                </tr>
            <?php
            }
            ?>
    </div>
    </form>
<?php
} catch (PDOException $ex) {
    echo $ex;
}
?>