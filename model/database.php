<?php
    $dsn = 'mysql:host=jic5;dbname=my_guitar_shop1';
    $username = 'jic5';
    $password = 'aaREdyDI';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>