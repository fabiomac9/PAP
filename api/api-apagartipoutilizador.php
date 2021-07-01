<?php
$id = $_REQUEST['id'];
    try {
        
        $stmt = $db->prepare("DELETE FROM userstype WHERE id= :id ");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        
    header('Location: index.php?cmd=TipoUtilizadores');
} catch (PDOException $ex) {
    echo $ex;
}