<?php
$id = $_REQUEST['id'];
    try {
        
        $stmt = $db->prepare("DELETE FROM productstype WHERE id= :id ");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        
    header('Location: index.php?cmd=TipoProdutos');
} catch (PDOException $ex) {
    echo $ex;
}