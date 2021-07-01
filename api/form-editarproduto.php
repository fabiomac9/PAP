<?php
$id = $_REQUEST['id'];
try {
    $stmt = $db->prepare('Select *, productstype.id as IDTYPE, u.id as ID from products as u JOIN productstype ON u.type = productstype.id WHERE u.id=:id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $arr = $stmt->fetchAll();
    $stmt = $db->prepare('Select * from productstype where id <> :id');
    $stmt->bindValue(':id', $arr[0]->IDTYPE);
    $stmt->execute();
    $types = $stmt->fetchAll();
?>
    <div class="container">
        <form action="index.php?cmd=editarproduto&id=<?= $id ?>" method="post">
            <?php
            foreach ($arr as $key => $value) {
            ?>
                <tr>
                    <td>
                        <div class="form-group">
                            ID
                            <input type="text" class="form-control" name="ID" value="<?= $value->ID ?>" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            Type
                            <select name="type" class="form-control">
                                <option value="<?= $value->IDTYPE ?>">
                                    <?= $value->type ?>
                                </option>
                                <?php
                                foreach ($types as $type => $tipo) {
                                ?>
                                    <option value="<?= $tipo->id ?>"><?= $tipo->type ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            Nome
                            <input type="text" class="form-control" name="name" value="<?= $value->name ?>">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            Preço
                            <input type="text" class="form-control" name="price" value="<?= $value->price ?>€">
                        </div>
                    </td>
                    <td>
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