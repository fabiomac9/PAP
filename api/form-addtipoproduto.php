<?php
try {
    $stmt = $db->prepare('SELECT `AUTO_INCREMENT`
    FROM  INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = "papstore"
    AND   TABLE_NAME   = "productstype"');
    $stmt->execute();
    $auto_increment = $stmt->fetchAll();

    $stmt = $db->prepare('SELECT * from productstype');
    $stmt->execute();
    $arr = $stmt->fetchAll();
?>

    <div class="container">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $auto_increment[0]->AUTO_INCREMENT ?>" readonly>
            </div>
            <div class="form-group">
                <label for="TipoDeProduto">Tipo de Produto</label>
                <input type="text" class="form-control" id="Tipo de Produto" placeholder="Tipo de Produto">
            </div>
            <a type="submit" href="#" class="btn btn-primary">Adicionar Tipo de Produto</a>
        </form>
    </div>

<?php
} catch (PDOException $ex) {
    echo $ex;
}