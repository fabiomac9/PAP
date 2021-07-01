<?php
$id = $_REQUEST['id'];
    try {
        $type = $_POST['type'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $address = ($_POST['address']);
        
        $stmt = $db->prepare("UPDATE users SET type=:type, username=:username,
        mail=:mail, phone=:phone, address=:address WHERE id= :id ");

        $stmt->bindValue(':type', $type);
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':phone', $phone);
        $stmt->bindValue(':mail', $mail);
        $stmt->bindValue(':address', $address);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

    header('Location: index.php?cmd=Utilizadores');
} catch (PDOException $ex) {
    echo $ex;
}