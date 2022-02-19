<?php
	session_start();
	//	include './source/process_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Yourself</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"></script>
    <link rel="stylesheet" href="source/animate.css">
	<link rel="stylesheet" href="source/style2.css">
	<script src="source/script2.js"></script>
	<?php
		include('update/function.php');
		//		echo $nameErr;
	?>

</head>
<body>
<?php
		$nameErr = $emailErr = $mobilenoErr = $genderErr = $adharErr ="";
		$name = $email = $mobileno = $gender =  $aadharno ="";
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if (empty($_POST["name"])) {
				$nameErr= "Name is required";
//				echo "no name";
			} else {
				$name = input_data($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only alphabets allowed";
//					echo $nameErr;
				}
			}
			
			//Email Validation
			if (empty($_POST["emailid"])) {
				$emailErr = "Email is required";
//				echo "email";
			} else {
				$email = input_data($_POST["emailid"]);
				// check that the e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email ";
//					echo $emailErr;
				}
			}
			
			//Number Validation
			if (empty($_POST["contactno"])) {
				$mobilenoErr = "Mobile no is required";
//				echo "mob";
			} else {
				$mobileno = input_data($_POST["contactno"]);
				// check if mobile no is well-formed
				if (!preg_match ("/^[0-9]*$/", $mobileno) ) {
					$mobilenoErr = "Only numeric values.";
				}
				//check mobile no length should not be less and greator than 10
				if (strlen ($mobileno) != 10) {
					$mobilenoErr = "only 10 digits required.";
//					echo $mobilenoErr;
				}
			}
			if (empty($_POST["aadharno"])) {
				$adharErr = "aadharno no is required";
				echo "mob";
			} else {
				$aadharno = input_data($_POST["aadharno"]);
				// check if mobile no is well-formed
				if (!preg_match ("/^[0-9]*$/", $aadharno) ) {
					$adharErr = "Only numeric values .";
				}
				if (strlen ($aadharno) != 12) {
					$adharErr = "adhaar no. must be 12 digit.";
//					echo $adharErr;
				}
			}
		}
	?>
<?php
//	include 'database/conn.php';
//	include_once 'function.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"
    || ($_POST['submit'] == 'Register'))
{
    include 'database/conn.php';
    try {
        $db = new PDO(DB_INFO, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//			echo "successful";
    } catch (PDOException $e) {
        echo "fail:" .
            $e->getMessage();
    }
//		validate($_POST);
//		echo "akkk";
//		echo "test";
    if ($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" &&$adhaErr=="" )
    {
//			$address = $_POST['address'];
        $password=$_POST['password'];
        $rolno=$_POST['rollno'];
        $course = $_POST['course'];
        $password=$_POST['password'];
        $adar=$_POST['aadharno'];
        $clubs=$_POST['clubname'];
        $rollError=$emaErr=$mobErr=$adhaErr= "";
        $gender=$_POST['gender'];
        $sqlroll="select ROllnumber,email,mobile,adhaarcard from users";
        $res=$db->query($sqlroll);
        foreach ($res as $rl)
        {
            if($rl['ROllnumber']==$rolno)
            {
                $rollError=" Already registered Rollnumber";
//						echo $rollError;
            }
            else
            {
//						echo "wrong";
            }
            if($rl['email']==$email)
            {
                $emaErr="Already registered email";
//						echo $emaErr;
            }
            else
            {
//						echo "wrong";
            }
            if($rl['mobile']==$mobileno)
            {
                $mobErr="Already registered Number";
                echo $mobErr;
            }
            else
            {
//						echo "wrong";
            }
            if($rl['adhaarcard']==$aadharno)
            {
                $adhaErr="Aleady registered Adhar";
//						echo $adhaErr;
            }

//					echo "varify";
        }

        if($rollError=="" && $emaErr=="" && $mobErr=="" && $adhaErr=="")
        {

            $sql1 = "insert into users (ROllnumber,name,mobile,course,email,adhaarcard,password,Gender) values (?,?,?,?,?,?,?,?);";
            $result = $db->prepare($sql1);

            $sql2="select ClubId from clubs where name='$clubs'";

            $resultii=$db->query($sql2);
            echo "second";
            foreach ($resultii as $kk)
            {

                $clid=$kk[0];
            }
            $sql3="select Candidates from clubs where Clubid=$clid";
            $re=$db->query($sql3);
            echo $clid;

            foreach ($re as $kk)
            {
                echo $kk[0];
                $condi=$kk[0];
            }
            $condi=$condi+1;
            echo $condi;
            $sql4="update clubs set Candidates=$condi where Clubid=$clid";
            $resulti4=$db->query($sql4);
            echo "g";

            $sql3="insert into userClub(useid,cluid,Date) values (?,?,current_date ())";
            $result->execute(array($rolno,$name,$mobileno,$course,$email,$aadharno,$password,$gender));
            $result=$db->prepare($sql3);
            echo $rolno;
            $result->execute(array($rolno,$clid));
            echo "third";
            echo "hello";
            $_SESSION['roll']=$_POST['rollno'];
//				$result->closeCursor();
            $_SESSION['login-user']=1;
            header('Location:users.php');
            $finalresult="Sussesfull registerd";
//				echo $finalresult;
        }
        else
        {
            echo "wrong";
//				die("");
        }
    }
    else {

        $resul="you did not fill form correctly";
        echo $result;
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
<section class="bgani">
    <span class="animt" ></span>
    <span class="animt"></span>
    <span class="animt"></span>
    <span class="animt"></span>
    <span class="animt"></span>
    <span class="animt"></span>
    <span class="animt"></span>
    <span class="animt"></span>
</section>
<div class="container-fluid" style="padding-top: 5%">
	<div class="row">
        <div class="col-lg-6"></div>
		<div class="col-lg-6 ">
			<!--			<h1>akash</h1>-->
			<div class="row">
				<form id="register" autocomplete="off" class="" action="" method="POST"
					 target="_self" role="form">
					<div class="row text-center">
						<h2 style="margin-top: 5%; width: 36%;margin: auto;margin-top: 5%;margin-bottom: 4%">
							Register</h2>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="row form-group">
								<input type="text" name="name" class="form-control" placeholder="Name*" required>
								<span class="error"> <?php echo $nameErr; ?> </span>
							</div>
							<div class="row form-group">
								<input type="email" autocomplete="false" name="emailid" class="form-control"
									   placeholder="Email Id*" required>
								<span class="error"> <?php echo $emailErr; ?> </span>
								<span class="error"> <?php echo $emaErr; ?> </span>
							</div>
							<div class="row form-group">
								<input type="tel" name="contactno" class="form-control" maxlength="10"
									   pattern="\d{10}" title="Please enter exactly 10 digits"
									   placeholder="Contact No.*">
								<span class="error"> <?php echo $mobilenoErr; ?> </span>
								<span class="error"> <?php echo $mobErr; ?> </span>
							</div>
							<div class="row form-group">
								<input type="text" name="course" class="form-control" placeholder="Course*" required>
							</div>
							<div class="row form-group">
								<input type="text" name="rollno" class="form-control" placeholder="Roll No*"
									   required>
								<span class="error"> <?php echo $rollError; ?> </span>
							</div>

						</div>
						<div class="col-lg-6">
							<div class="maxl form-group"
								 style="padding: 2.7%;background-color: white;border-radius: .25rem">
								<label class="radio inline">
									<input type="radio" name="gender" value="Male" checked="">
									<span> Male </span>
								</label>
								<label class="radio inline">
									<input type="radio" name="gender" value="Female">
									<span>Female </span>
								</label>
								<span class="error">* <?php echo $genderErr; ?> </span>
							</div>
							<div class="row form-group">
								<input type="tel" name="aadharno" class="form-control" maxlength="12"
									   pattern="\d{12}"
									   title="Please enter exactly 12 digits" placeholder="Aadhar No." required>
								<span class="error"> <?php echo $adharErr; ?> </span>
								<span class="error"> <?php echo $adhaErr; ?> </span>
							</div>
							<div class="row form-group">
                                <select name="clubname" class="form-control" required>
                                    <option value="Coding">
                                        Coding Club
                                    </option>
                                    <option value="Cultural">
                                        Cultural Club
                                    </option>
                                    <option value="Fitness">
                                            Fitness Club
                                    </option>
                                    <option value="Gardening">
                                        Gardening Club
                                    </option>
                                    <option value="Photography">
                                            Photography Club
                                    </option>
                                    <option value="Literary ">
                                            Litreary Club
                                    </option>
                                    <option value="Robotics And Drone">
                                            Robotics and Drone
                                    </option>
                                    <option value="Cooking">
                                                Cooking Club
                                    </option>
                                </select>
							</div>
							<div class="row form-group">
								<input type="password" class="form-control" placeholder="Password *" id="password"
									   name="password" required/>
							</div>
							<div class="row form-group">
								<input type="password" class="form-control" id="cpassword"
									   placeholder="Confirm Password *" name="cpassword" onkeyup='check();'
									   required/><span id='message'></span>
							</div>
							<div class="row">
							
							</div>
						</div>
					</div>
					<!--					<hr>-->
					<!--					<br>-->
					<div class="row text-center">
                        <div class="col-sm-4">
                            <a href="index.php">Back</a>
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" name="submit"
                                    style="margin-top: 5%; width: 58%;margin-left: auto;margin-right: auto;margin-bottom: 4%"
                                    class="submit-btn">Register
                            </button>
                        </div>
                        <div class="col-sm-4">
                            <button onclick="document.getElementById('register').reset();">Reset</button>
                        </div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>

</div>

</body>
</html>

