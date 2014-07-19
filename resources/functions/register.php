<?php 


include "../config.php";


$usernamel = strlen($_POST["regname"]);
$passwordl = strlen($_POST["regpass1"]);

$conn = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql = "SELECT * FROM user WHERE name = '" . mysql_real_escape_string($_POST['regname']) . "'";

if ($passwordl < 6) {
	echo 'Your password has to be at least 6 chracters long!';
}
elseif ($usernamel < 6) {
	echo 'Your username has to be atleast 6 characters long!';
}
	
else {
if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
if ($_POST["regname"] && $_POST["email"] && $_POST["regpass1"] && $_POST["regpass2"] ) {	


		$salt = "ripemd128";
		$_POST["regpass1"] = hash($salt,$_POST["regpass1"]);
		$_POST["regpass2"] = $_POST["regpass1"];

			$sql = "insert into $table_name (username,password,email)values('$_POST[regname]','$_POST[regpass1]','$_POST[email]')";
			$result = mysql_query ($sql,$conn) or die (mysql_error());
	
	header("location:../index.php");
	
	}	else {
				print"invaild data";
	}	
	}
	else {
		echo "Invalid email";
		}
		
		}
		
?>