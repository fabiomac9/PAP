<?php
try {
    $type = $_POST['type'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $charac = $_POST['charac'];

    $stmt = $db->prepare('INSERT INTO products (type, name, price, charac) VALUES (:type, :name, :price, :charac)');
    $stmt->bindValue(':type', $type);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':price', $price);
    $stmt->bindValue(':charac', $charac);
    $stmt->execute();

    header('Location: index.php?cmd=Produtos');
} catch (PDOException $ex) {
    echo $ex;
}