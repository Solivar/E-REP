<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'erep');
	if (isSet($_POST['reg']) && isSet($_POST['regname']) && isSet($_POST['regpass1']) && $_POST['regname'] != '' && $_POST['regpass1'] != '' && $_POST['regpass1'] == $_POST['regpass2']) {
		$regpass1 = $_POST['regpass1'];
		$regpass1MD5 = md5($regpass1);
		$regname = $_POST['regname'];
		$email = $_POST['email'];
		$q = mysqli_query($con, "SELECT * FROM user WHERE `username`='$regname'");
		if (mysqli_num_rows($q) > 0) {
			echo 'That username is already taken.';
		}else{
			$qq = mysqli_query($con, "INSERT INTO user (username,password,email) VALUES ('$regname', '$regpass1MD5', '$email')");
			if ($qq) {
				echo 'Registered successfully!';
			}else
				echo 'Failed to register.';
		}
	}
	else { echo 'Fill out the form you dumb fuck!';}
?>