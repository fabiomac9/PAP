<?php
$id = $_REQUEST['id'];
    try {
        
        $stmt = $db->prepare("DELETE FROM products WHERE id= :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

    header('Location: index.php?cmd=Produtos');
} catch (PDOException $ex) {
    echo $ex;
}