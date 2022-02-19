<?php
session_start();
include_once 'database/conn.php';
try {
    $db = new PDO(DB_INFO, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
} catch (PDOException $e) {
    echo "fail:" .
        $e->getMessage();
}
if(isset($_POST["username"]))
{
    $query = "  
      SELECT * FROM  users
      WHERE ROllnumber = '".$_POST["username"]."'  
      AND Password = '".$_POST["password"]."'  
      ";
    $result = $db->query($query);
    if($result->rowCount()> 0)
    {
        $_SESSION['roll'] = $_POST['username'];
        echo 'Yes';
    }
    else
    {
        echo 'No';
    }
}

?>