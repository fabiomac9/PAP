<?php
try {
    $type = $_POST['type'];
    $username = $_POST['name'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $stmt = $db->prepare('INSERT INTO users (type, username, mail, address, phone) VALUES (:type, :username, :mail, :address, :phone)');
    $stmt->bindValue(':type', $type);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':mail', $mail);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':phone', $phone);
    $stmt->execute();

    header('Location: index.php?cmd=Utilizadores');
} catch (PDOException $ex) {
    echo $ex;
}