<?php

include "../config.php";

// Connect to server and select databse.
$conn = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$salt = "ripemd128";
// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword = hash($salt,$mypassword);


$result = mysql_query("SELECT * FROM game WHERE username='$myusername' ");
   while($row = mysql_fetch_array($result, MYSQL_NUM)) {
   $username2 = $row['username'];
   $password2 = $row['username'];
  }

  
// If result matched $myusername and $mypassword, table row must be 1 row
if($myusername == $username2 && $mypassword == $password2){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
if(isset($_SESSION['myusername'])){
header("location:../index.php");
}
}
else {
echo "Wrong Username or Password";

}

?>