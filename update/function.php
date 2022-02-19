<?php
	session_start();
	include '../database/conn.php';
	
//	$emailErr="";
	$rollError=$emaErr=$mobErr=$adhaErr = "";
	
	
	function validate($POST)
	{
		
		// define variables to empty values
//Input fields validation
		$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = $adharErr = "";
		$name = $email = $mobileno = $gender = $website = $agree = $aadharno = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
//			$post[]

//String Validation
			if (empty($POST["name"])) {
			 $nameErr= "Name is required";
			 echo "no name";
			} else {
				$name = input_data($POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only alphabets and white space are allowed";
					echo $nameErr;
				}
			}

			//Email Validation
			if (empty($POST["emailid"])) {
				$emailErr = "Email is required";
				echo "email";
			} else {
				$email = input_data($POST["emailid"]);
				// check that the e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format";
					echo $emailErr;
				}
			}

			//Number Validation
			if (empty($POST["contactno"])) {
				$mobilenoErr = "Mobile no is required";
				echo "mob";
			} else {
				$mobileno = input_data($POST["contactno"]);
				// check if mobile no is well-formed
				if (!preg_match ("/^[0-9]*$/", $mobileno) ) {
					$mobilenoErr = "Only numeric value is allowed.";
				}
				//check mobile no length should not be less and greator than 10
				if (strlen ($mobileno) != 10) {
					$mobilenoErr = "Mobile no must contain 10 digits.";
					echo $mobilenoErr;
				}
			}
				if (empty($POST["aadharno"])) {
				$mobilenoErr = "Mobile no is required";
				echo "mob";
			} else {
					$aadharno = input_data($POST["aadharno"]);
				// check if mobile no is well-formed
				if (!preg_match ("/^[0-11]*$/", $aadharno) ) {
					$adharErr = "Only numeric value is allowed.";
				}
				//check mobile no length should not be less and greator than 10
				if (strlen ($mobileno) != 10) {
					$mobilenoErr = "Mobile no must contain 10 digits.";
					echo $mobilenoErr;
				}
			}
			
			//Empty Field Validation
//			if (empty ($POST["gender"])) {
//				$genderErr = "Gender is required";
//			} else {
//				$gender = input_data($POST["gender"]);
//			}

			//Checkbox Validation
			
		}

	}
	function input_data($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function varify($roll,$ema,$mob,$adhar)
	{
		include '../database/conn.php';
		global $rollError,$emaErr,$mobErr,$adhaErr;
		
		$sqlroll="select ROllnumber,email,mobile,adhaarcard from users";
		$res=$db->query($sqlroll);
		foreach ($res as $rl)
		{
			if($rl['ROllnumber']==$roll)
			{
				$rollError="This Roll number Already registered";
				echo $rollError;
			}
			else
			{
				echo "wrong";
			}
			if($rl['email']==$ema)
			{
				$emaErr="Already registered with this Email Id";
				echo $emaErr;
			}
			else
			{
				echo "wrong";
			}
			if($rl['mobile']==$mob)
			{
				$mobErr="Mobile Number already registered";
				echo $mobErr;
			}
			else
			{
				echo "wrong";
			}
			if($rl['adhaarcard']==$adhar)
			{
				$adhaErr="Adhaar Aleady registered";
				echo $adhaErr;
			}
			
			echo "varify";
		}
	}
	
	?>