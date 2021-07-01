<?php
try {
    $sUserName = 'papstore';
    $sPassword = 's#p"iRnj';
    $sConnection = "mysql:host=localhost; dbname=papstore; charset=utf8mb4";

    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    $aOptions = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    );
    $db = new PDO($sConnection, $sUserName, $sPassword, $aOptions);
} catch (PDOException $e) {
    echo $e;
    exit();
}
