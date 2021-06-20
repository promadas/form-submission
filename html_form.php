<!DOCTYPE HTML>
<html>
<head>
	<title>Form Submission</title>
<body style="background: skyblue;">
	<h1>Form Submission</h1>
	<?php
		$fname="";
		$fnameErr="";
		$lname="";
		$lnameErr="";
		$gender="";
		$genderErr="";
		$Dob="";
		$DobErr="";
		$religion="";
		$religionErr="";
		$email="";
		$emailErr="";
		$uname="";
		$unameErr="";
		$pass="";
		$passErr="";
	?>
	<?php

	     if($_SERVER['REQUEST_METHOD'] === "POST") 
	        {
	        	echo "<br>";
	        	if(!empty($_POST['fname'])) 
	        	{
	        		$fname = $_POST['fname'];
	        	}
	        	else
	        	{
	        		$fnameErr="*required";
	        	}
	        	if(!empty($_POST['lname']))
	        	{
	        		$lname=$_POST['lname'];
	        	}
	        	else
	        	{
	        		$lnameErr="*required";
	        	} 
	        	if(!empty($_POST['gender']))
	        	{
	        		$gender=$_POST['gender'];
	        	}
	        	else
	        	{
	        		$genderErr="*required";
	        	}
	        	if(!empty($_POST['Dob']))
	        	{
	        		$Dob=$_POST['Dob'];
	        	}
	        	else
	        	{
	        		$DobErr="*required";
	        	}
	        	if(!empty($_POST['religion']))
	        	{
	        		$Dob=$_POST['religion'];
	        	}
	        	else
	        	{
	        		$religionErr="*required";
	        	}
	        	if(!empty($_POST['email']))
	        	{
	        		$email=$_POST['email'];
	        	}
	        	else
	        	{
	        		$emailErr="*required";
	        	}
	        	if(!empty($_POST['uname']))
	        	{
	        		$uname=$_POST['uname'];
	        	}
	        	else
	        	{
	        		$unameErr="*required";
	        	}
	        	if(!empty($_POST['pass']))
	        	{
	        		$pass=$_POST['pass'];
	        	}
	        	else
	        	{
	        		$passErr="*required";
	        	}
	        }

	        function input($v) 
    {
    $v = trim($v);
    $v = stripslashes($v);
    $v = htmlspecialcars($v);
    return $v;
 }
 ?>
 
    


  
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<fieldset>
			<legend>Basic Information :</legend>
			<label for="fname">First Name:</label>
			<input type="text" id="fname" name="fname" value="<?php echo $fname;?>">
			<span style="color: red"><?php echo $fnameErr; ?></span>

			<label for="lname">Last Name:</label>
			<input type="text" id="lname" name="lname" value="<?php echo $lname;?>">
			<span style="color: red"><?php echo $lnameErr; ?></span>
			<br>


			<label for="gender">Gender:</label>
			<br>
			<input type="radio" id="male" name="gender" value="<?php echo $gender;?>">
			<span style="color: red"><?php echo $genderErr; ?></span>
			

			<label for="male">Male</label>
			<br>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label>
			<br>
			<input type="radio" id="other" name="gender" value="other">
			<label for="other">Other</label>
			<br>
			<label for="DoB">DoB:</label>
			<input type="date" id="DoB" name="DoB" value="<?php echo $Dob;?>">
			<span style="color: red"><?php echo $DobErr; ?></span>
			<br>
			<label for="religion">Religion: </label>
			<select id="religion" name="religion"  value="<?php echo $religion;?>"> 
			<span style="color: red"><?php echo $religionErr; ?></span>
			<option value="hindu">Hindu</option>
			<option value="muslim">Muslim</option>
			<option value="christan">Christian</option>
		</select>
	</fieldset>
        <fieldset>
			<legend>Contact Information :</legend>
			<label for="comment">Present Address</label>
			<textarea id="comment" name="comment" rows="5" cols="10"></textarea>
			<br>
			<label for="comment1">Permanent  Address</label>
			<textarea id="comment1" name="comment1" rows="5" cols="10"></textarea>
			<br>
			<label for="phone">Enter your phone number:</label>
			<input type="tel" id="phone" name="phone">
			<br>
			<label for="email">Email: </label>
			<input type="email" id="email" name="email" value="<?php echo $email;?>">
			<span style="color: red"><?php echo $emailErr;?></span>
			<br>
			<a href="https://github.com" target="_blank">Personal Website</a>
		</fieldset>
		<fieldset>
			<legend> Account Information:</legend>
			<label for="uname">Username</label>
			<input type="text" id="uname" name="uname" value="<?php echo $uname;?>">
			<span style="color: red"><?php echo $unameErr;?></span>
			
			<br>
			<label for="pass">Password</label>
			<input type="Password" id="pass" name="pass" value="<?php echo $pass;?>">
			<span style="color: red"><?php echo $passErr;?></span>
			



		</fieldset>
		<br>
		<input type="Submit" value="submit">
	</form>
</body>
</html>

	
