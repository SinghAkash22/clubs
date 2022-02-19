<?php
session_start();
//    include_once 'script.js';
include_once '../database/conn.php';
try {
    $db = new PDO(DB_INFO, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
} catch (PDOException $e) {
    echo "fail:" .
        $e->getMessage();
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if ($_POST['submit-user'] == 'Submit') {
        $uname = $_POST['roll'];
        $ups = $_POST['pasw'];
        echo $uname;
        $sql = "select * from users where ROllnumber='$uname' and  Password='$ups' ";
        echo "jhjj";
        $result = $db->query($sql);
        echo "hello";
        if ($result->rowCount() > 0) {
            $_SESSION['roll'] = $uname;
            $_SESSION['login-user']=1;
            header('Location:../users.php');
        } else {
            $_SESSION['mage'] = "wrong credential";
            $code=0;
            header('Location:../index.php?code='.$code);
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if ($_POST['submit-admin'] == 'Submit') {
        $uname = $_POST['email'];
        $ups = $_POST['pasw'];
        echo $uname;
        $sql = "select * from HeadCommittee where email='$uname' and  password='$ups' ";
        echo "jhjj";
        $result = $db->query($sql);
        echo "hello";
        if ($result->rowCount() > 0) {
            $_SESSION['roll'] = $uname;
            $_SESSION['login-admin']=1;
            header('Location:../admin.php');
        } else {
            $_SESSION['mage'] = "wrong credential";
            $code=0;
            header('Location:../index.php?code='.$code);
        }
    }
}




function checkinguser($db, $uname, $ups)
{
    $sql = "select ROllnumber,Password
              from users";
    $result = $db->query($sql);

    foreach ($result as $row) {
        if (
            $row['ROllnumber'] == $uname &&
            $row['Password'] == $ups
        ) {
            return 1;
        } else {
            return 0;
        }
    }
}


?>
