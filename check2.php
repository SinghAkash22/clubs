<form id="register" autocomplete="off" class="" action="update/reg.php" method="POST"
	  role="form">
	<div class="col-md-6">
		<div class="row">
			<input type="text" name="name" class="input-field" placeholder="Name" required>
			<span class="error">* <?php echo $nameErr; ?> </span>
		</div>
		<div class="row">
			
			<input type="email" autocomplete="false" name="emailid" class="input-field"
				   placeholder="Email Id" required>
			<span class="error">* <?php echo $emailErr; ?> </span>
		</div>
		<div class="row">
			<input type="tel" name="contactno" class="input-field" maxlength="10"
				   pattern="\d{10}" title="Please enter exactly 10 digits"
				   placeholder="Contact No.">
			<span class="error">* <?php echo $mobilenoErr; ?> </span>
		</div>
		<div class="row">
			<input type="text" name="course" class="input-field" placeholder="Course" required>
		</div>
		<div class="row">
			<input type="text" name="branch" class="input-field" placeholder="Branch" required>
		</div>
		<div class="row">
			<input type="text" name="rollno" class="input-field" placeholder="Roll No*"
				   required>
		</div>
		<div class="row">
			<input type="text" name="year" class="input-field" placeholder="Year*" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
			<span class="error">* <?php echo $genderErr; ?> </span>
		</div>
		<div class="row">
			<input type="text" name="address" class="input-field" placeholder="Local Address"
				   required>
		</div>
		<div class="row">
			<input type="number" name="aadharno" class="input-field" maxlength="12" pattern="\d{12}"
				   title="Please enter exactly 12 digits" placeholder="Aadhar No." required>
		</div>
		<div class="row">
			<input type="text" name="clubname" class="input-field"
				   placeholder="Name of the club you want to register for" required>
		</div>
		<div class="row">
			<input type="password" class="input-field" placeholder="Password *" id="password"
				   name="password" required/>
		</div>
		<div class="row">
			<input type="password" class="input-field" id="cpassword"
				   placeholder="Confirm Password *" name="cpassword" onkeyup='check();'
				   required/><span id='message'></span>
		</div>
		<div class="row">
		
		</div>
	</div>
	<hr>
	<br>
	<button type="submit" name="submit" class="submit-btn">Register</button>

</form>