<?php
$id = $_REQUEST['id'];
try {
    $stmt = $db->prepare('Select *, userstype.id as IDTYPE from users as u JOIN userstype ON u.type = userstype.id where u.id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $arr = $stmt->fetchAll();
    $stmt = $db->prepare('Select * from userstype where id <> :id');
    $stmt->bindValue(':id', $arr[0]->IDTYPE);
    $stmt->execute();
    $types = $stmt->fetchAll();
?>
    <div class="container">
        <form action="index.php?cmd=editarutilizador&id=<?= $id ?>" method="post">
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
                            Username
                            <input type="text" class="form-control" name="username" value="<?= $value->username ?>">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            Phone
                            <input type="text" class="form-control" name="phone" value="<?= $value->phone ?>">
                        </div>
                    </td>
                    <td>
                    <td>
                        <div class="form-group">
                            Mail
                            <input type="text" class="form-control" name="mail" value="<?= $value->mail ?>">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            Address
                            <input type="text" class="form-control" name="address" value="<?= $value->address ?>">
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