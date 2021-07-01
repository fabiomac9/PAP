<?php
try {
    $id = $_POST['id'];
    $type = $_POST['type'];

    $stmt = $db->prepare('INSERT INTO productstype (id, type) VALUES (:id, :type)');
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':type', $type);
    $stmt->execute();

    header('Location: index.php?cmd=TipoProdutos');
} catch (PDOException $ex) {
    echo $ex;
}