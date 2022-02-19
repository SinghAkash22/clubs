<?php
session_start();
$club=$_GET['club'];
$code=$_GET['code'];
include_once 'database/conn.php';
try {
    $db = new PDO(DB_INFO, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
} catch (PDOException $e) {
    echo "fail:" .
        $e->getMessage();
}
echo $club;
echo $code;


$sql3="insert into delet(useid,cluid,Date) values (?,?,current_date ())";
$result=$db->prepare($sql3);
$result->execute(array($code,$club));

echo "hh";

$sql2="delete from userClub where useid=$code";

$sql="select Candidates from clubs where Clubid=$club";
$re=$db->query($sql);
//echo $clid;

foreach ($re as $kk)
{
//    echo $kk[0];
    $condi=$kk[0];
}
$condi=$condi-1;
echo $condi;
$sql4="update clubs set Candidates=$condi where Clubid=$club";
$resulti4=$db->query($sql4);
echo "g";

$sql="delete from userClub where useid=$code";
$res=$db->query($sql);

header('Location:studend.php?code='.$club);
?>
