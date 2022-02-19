<?php
	session_start();
	
	include 'database/conn.php';
	include_once 'function.php';
	if ($_SERVER['REQUEST_METHOD'] == "POST"
		|| ($_POST['submit'] == 'Register')) {
		echo "get";
		try {
			$db = new PDO(DB_INFO, DB_USER, DB_PASS);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//			echo "successful";
		} catch (PDOException $e) {
			echo "fail:" .
				$e->getMessage();
		}
		validate($_POST);
		if ($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" )
		{
			varify($_POST['rollno'],$email,$mobileno,$_POST['address']);
			if($rollError=="" && $emaErr=="" && $mobErr=="" && $adhaErr=="")
			{
//				$name = $_POST['name'];
//				$emailid = $_POST['emailid'];
//				$contactno = $_POST['contactno'];
				$address = $_POST['address'];
//				$aadharno = $_POST['aadharno'];
//				$clubname = $_POST['clubname'];
				
				$password=$_POST['password'];
				$rolno=$_POST['rollno'];
				$course = $_POST['course'];
				$year=$_POST['year'];
				$password=$_POST['password'];
				$adar=$_POST['aadharno'];
				$branch = "";
				if(isset($_POST['branch']))
				{
					$branch = $_POST['branch'];
				}
				else
				{
					$branch = "";
				}
				
//				$sql1="select * from users;";
//				$result1 = $db->query($sql1);
//				echo "text";
//				foreach ($result1 as $rs)
//				{
//					echo $rs['name'];
//				}
				$sql1 = "insert into users (ROllnumber,name,mobile,course,branch,year,address,email,adhaarcard,password) values (?,?,?,?,?,?,?,?,?,?);";
				$result = $db->prepare($sql1);
//				$result->execute(array($rolno,$name,$contactno ,$course,$branch,$year,$address,$emailid ,$adar,$password));
				$result->execute(array($rolno,$name,$mobileno,$course,$branch,$year,$address,$email,$aadharno,$password));
				echo "second";
				$result->closeCursor();
				$sql2="select ClubId from clubs where name ==$clubs";
				$result=$db->query($sql2);
				$sql3="insert into userClub(useid,cluid) values (?,?);";
				$result=$db->prepare($sql3);
				$result->execute(array($rolno,$clbid));
				$result->closeCursor();
				$finalresult="Sussesfull registerd";
				echo $finalresult;
			}
			else
			{
				die("wrong input");
			}

		}
		else {

			$result="you did not fill form correctly";
//			header('Location:../register.php');
//			die($resul);
		}
		
		

	
		if (isset($_POST['batch'])) {
			$batch = $_POST['batch'];
		} else {
			$batch = 'NA';
		}
		
	}


?>
