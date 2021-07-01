<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

try {
    $stmt = $db->prepare('SELECT * FROM users WHERE mail=:email');
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $arr = $stmt->fetchAll();

    if ($arr[0]->password == md5($password)) {
        $_SESSION['id'] = $arr[0]->id;
        $_SESSION['mail'] = $arr[0]->mail;
        $_SESSION['address'] = $arr[0]->address;
        $_SESSION['phone'] = $arr[0]->phone;
        $_SESSION['type'] = $arr[0]->type;
        $_SESSION['username'] = $arr[0]->username;
    }
    echo '<meta http-equiv="refresh" content="0;url=index.php" />';
} catch (PDOException $ex) {
    echo $ex;
}
