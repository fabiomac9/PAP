<?php
try {
    $stmt = $db->prepare('SELECT `AUTO_INCREMENT`
    FROM  INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = "papstore"
    AND   TABLE_NAME   = "products"');
    $stmt->execute();
    $auto_increment = $stmt->fetchAll();

    $stmt = $db->prepare('SELECT * from productstype');
    $stmt->execute();
    $arr = $stmt->fetchAll();
?>

    <div class="container">
        <form action="index.php?cmd=addtipoprodutos" method="POST">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" value="<?= $auto_increment[0]->AUTO_INCREMENT ?>" readonly>
            </div>
            <div class="form-group">
                <label for='type'><b>Tipo de Produto</b></label>
                <input class="form-control" type="text" name="type" placeholder="Tipo de Produto">
            </div>
            <input class="btn btn-primary" type="submit" name="criar" value="Adicionar Tipo de Produto">
        </form>
    </div>

<?php
} catch (PDOException $ex) {
    echo $ex;
}