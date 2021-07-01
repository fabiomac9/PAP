<?php
$id = $_REQUEST['id'];
    try {
        
        $stmt = $db->prepare("DELETE FROM users WHERE id= :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

    header('Location: index.php?cmd=Utilizadores');
} catch (PDOException $ex) {
    echo $ex;
}