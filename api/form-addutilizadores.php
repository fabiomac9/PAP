<?php
try {
    $stmt = $db->prepare('SELECT `AUTO_INCREMENT`
    FROM  INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = "papstore"
    AND   TABLE_NAME   = "users"');
    $stmt->execute();
    $auto_increment = $stmt->fetchAll();

    $stmt = $db->prepare('Select *, userstype.type as TYPE, users.id as ID from users JOIN userstype ON userstype.id = users.type');
    $stmt->execute();
    $arr = $stmt->fetchAll();
    $stmt = $db->prepare('Select *, userstype.type as Tp, userstype.id as ID FROM userstype');
    $stmt->execute();
    $arr = $stmt->fetchAll();
?>

    <div class="container">
        <form action="index.php?cmd=addutilizadores" method="POST">
            <div class="form-group">
                <label for="ID">ID</label>
                <input type="text" class="form-control" value="<?= $auto_increment[0]->AUTO_INCREMENT ?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control" type="text" name="name" placeholder="Nome do Utilizador">
            </div>
            <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name="mail" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="address">Morada</label>
                <input type="text" class="form-control" name="address" placeholder="Morada">
            </div>
            <div class="form-group">
                <label for="phone">Telemovel</label>
                <input type="tel" class="form-control" name="phone" placeholder="Telemovel">
            </div>
            <div class="form-group">
                <label for="type">Tipo de Utilizador</label>
                <select name="type" class="form-control">
                    <?php
                    foreach ($arr as $key => $value) {
                    ?>
                        <option value="<?= $value->id ?>"> <?= $value->Tp ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="add" value="Adicionar Utilizador">
        </form>
    </div>

<?php
} catch (PDOException $ex) {
    echo $ex;
}
