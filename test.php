<?php
#do not hide problems, hiding problems is bad mmmmmk?
error_reporting(-1);
ini_set('display_errors', 1);
 
#connect to mysql using PDO, change: testdb, username, password
$db = new PDO('mysql:host=localhost;dbname=EREP;charset=utf8', 'root', '');
 
#set options - attribute error mode to "Error mode exception" - http://www.php.net/manual/en/pdo.setattribute.php
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
echo 'Looks like a winner!';
