<?php

include_once "./resources/config.php"; //Includes the config file for MYSQL connection
// Connection to MYSQL for the first time
$conn = mysql_connect("$mysqlhost", "$mysqluser", "$mysqlpassword")or die("cannot connect"); 
mysql_connect("$mysqlhost", "$mysqluser", "$mysqlpassword")or die("cannot connect"); 
mysql_select_db("$mysqldatabase")or die("cannot select DB");
$sql = "SELECT * FROM $mysqluser WHERE name = '" . mysql_real_escape_string($_POST['regname']) . "'";
    $result = mysql_query($sql) or die('error');
    $row = mysql_fetch_assoc($result);
// End of connection to MYSQL script
	
	if ($password < 6) { // checks for the password length
		echo 'Your password has to be at least 6 chracters long!';
	}
	elseif ($usernamel < 6) {// checks for the username length
		echo 'Your username has to be atleast 6 characters long!';
	}
	elseif(mysql_num_rows($result)) { // checks if username is not already taken
		echo 'Username already taken!';
	}
		else {
				if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { // validates the email address, does not recognize if it's fake
							if ($_POST["regpass1"] == $_POST["regpass2"]) {
											$salt = "ripemd128";
											$_POST["regpass1"] = hash($salt,$_POST["regpass1"]);
											$_POST["regpass2"] = $_POST["regpass1"];
												$sql = "insert into $mysqluser (name,password,email)values('$_POST[regname]','$_POST[regpass1]','$_POST[email]')";
												$result = mysql_query ($sql,$conn) or die (mysql_error());
							}
				}
					else {
						echo "Invalid email";
					}
			header("location:./index.php");
		}	
		else {
					print"invalid data";
		}	
		
?>

