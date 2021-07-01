<?php
$id = $_REQUEST['id'];
    try {
        $type = $_POST['type'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $charac = ($_POST['charac']);
        
        $stmt = $db->prepare("UPDATE products SET type=:type, name=:name, price=:price, charac=:charac WHERE id= :id ");

        $stmt->bindValue(':type', $type);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':charac', $charac);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

    header('Location: index.php?cmd=Produtos');
} catch (PDOException $ex) {
    echo $ex;
}