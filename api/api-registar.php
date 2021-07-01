<?php
session_start();
try {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $password = md5($_POST['password']);

    $stmt = $db->prepare('INSERT INTO users (username, mail, password, phone, address, type) VALUES (:username, :mail, :password, :phone, :address, :type)');
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':mail', $mail);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':address', "");
    $stmt->bindValue(':type', 2);
    $stmt->execute();
    $_SESSION['id'] = $db->lastInsertId();
    $_SESSION['mail'] = $mail;
    $_SESSION['address'] = "";
    $_SESSION['phone'] = $phone;
    $_SESSION['type'] = 2;
    $_SESSION['username'] = $username;
    header('Location: index.php');
} catch (PDOException $ex) {
    echo $ex;
}
