<?php
    define('DB_INFO', 'mysql:host=localhost;dbname=clubs');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    try {
        $db = new PDO(DB_INFO, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
    } catch (PDOException $e) {
        echo "fail:" .
            $e->getMessage();
    }
?>
