<?php
$id = $_REQUEST['id'];
    try {
        $type = $_POST['type'];
        
        $stmt = $db->prepare("UPDATE productstype SET type=:type, id=:id WHERE id= :id ");

        $stmt->bindValue(':type', $type);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        
    header('Location: index.php?cmd=TipoProdutos');
} catch (PDOException $ex) {
    echo $ex;
}