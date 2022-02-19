<?php
	include 'database/conn.php';
	$sqlroll="select ROllnumber,email,mobile,adhaarcard from users";
	$res=$db->query($sqlroll);
	foreach ($res as $rs)
	{
		echo $rs['ROllnumber'];
	}
?>