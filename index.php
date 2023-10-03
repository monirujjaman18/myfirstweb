<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css" >
</head>
<body>
<center>
	<div>
		<h1>Registration Form</h1>
		<form method="POST">
			<input class="inp" type="text" placeholder="Enter your Name" required name="username"><br>
			<input class="inp"  type="text" placeholder="Enter your Roll" required name="roll"><br>
			
			
			<label>Department</label><br>
			<select name="department">
				<option hidden>Select your Department</option>
				<option>Computer</option>
				<option>Electrical</option>
				<option>Electronics</option>
				<option>Telecommunication</option>
				<option>IPCT</option>
			</select><br>
			
			<label>Semester</label><br>
			<select name="semester">
				<option hidden>Select your Semester</option>
				<option>1st</option>
				<option>2nd</option>
				<option>3rd</option>
				<option>4th</option>
				<option>5th</option>
				<option>6th</option>
				<option>7th</option>
				<option>8th</option>
				
			</select><br><br>
			<select name="blood" class="inp" style="color:white;" required >
			<option hidden value="">Select your Blood Group</option>
			<option value="A+" >A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
		</select><br>
			<label  class="lb">Select your Shift</label><br>
			<label>
				<input type="radio" name="shift" id="shift" value="1st shift">
				1st
			</label>
						<label>
				<input type="radio" name="shift" id="shift" value="2nd shift" >
				2nd
			</label><br><br>
			<label class="lb">Select your Gender</label><br>
			<label>
				<input type="radio" name="gender" id="gender" value="Male">
				Male
			</label>
			<label>
				<input type="radio" name="gender" id="gender" value="Female">
				Female
			</label>
				<label>
				<input type="radio" name="gender" id="gender" value="Custiom">
				Custom
			</label><br>
				
				<input class="inp"  type="text" placeholder="Enter your Mobile Number" required name="mobile"><br>
				
				<input class="inp btn"  type="submit" value="submit" name="submit">
		</form>
	</div>
</center>

</body>
</html>



<?php
       include("connection.php");
	   if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$roll=$_POST['roll'];
		$department=$_POST['department'];
		$semester=$_POST['semester'];
		$shift=$_POST['shift'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		
		mysqli_query($link,"insert into info(Name,Roll,Department,Semester,Shift,Gender,Mobile_number) values('$username','$roll','$department','$semester','$shift','$gender','$mobile')");
	}




?>