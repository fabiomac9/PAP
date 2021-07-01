<?php
try {
    $stmt = $db->prepare('SELECT `AUTO_INCREMENT`
    FROM  INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = "papstore"
    AND   TABLE_NAME   = "products"');
    $stmt->execute();
    $auto_increment = $stmt->fetchAll();

    $stmt = $db->prepare('Select *, productstype.type as TYPE, products.id as ID from products JOIN productstype ON productstype.id = products.type');
    $stmt->execute();
    $arr = $stmt->fetchAll();
?>

    <div class="container">
        <form action="index.php?cmd=addprodutos" method="POST">
            <div class="form-group">
                <label for="ID">ID</label>
                <input type="text" class="form-control" value="<?= $auto_increment[0]->AUTO_INCREMENT ?>" readonly>
            </div>
            <div class="form-group">
                <label for="type">Tipo de Produto</label>
                <select name="type" class="form-control">
                    <?php
                    foreach ($arr as $key => $value) {
                    ?>
                        <option value="<?= $value->id ?>"> <?= $value->TYPE ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="price">Preço</label>
                <input type="number" class="form-control" name="price" placeholder="Preço">
            </div>
            <input class="btn btn-primary" type="submit" name="add" value="Adicionar Produto">
        </form>
    </div>

<?php
} catch (PDOException $ex) {
    echo $ex;
}
