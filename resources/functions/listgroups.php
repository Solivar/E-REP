	<?php 
	if(isset($_SESSION['myusername']) == TRUE) {
	$salt = "ripemd128";
	$con = mysqli_connect('127.0.0.1', 'root', '', 'erep');
	$myusername = $_SESSION['myusername'];
	$result = mysqli_query($con,"SELECT * FROM user WHERE username='$myusername' ");
	   while($row = mysqli_fetch_array($result)) {
	   $ID = $row['id'];
		   if (empty($row['group1']) == FALSE) {
				   $group1 = $row['group1'];
			}
		   elseif (empty($row['group2']) == FALSE) {
				   $group2 = $row['group2'];
			}
			elseif (empty($row['group3']) == FALSE) {
				   $group3 = $row['group3'];
			}
			elseif (empty($row['group4']) == FALSE) {
				   $group4 = $row['group4'];
			}
			elseif (empty($row['group5']) == FALSE) {
				   $group5 = $row['group5'];
			}
			elseif (empty($row['group6']) == FALSE) {
				   $group6 = $row['group6'];
			}
			elseif (empty($row['group7']) == FALSE) {
				   $group7 = $row['group7'];
			}
			elseif (empty($row['group8']) == FALSE) {
				   $group8 = $row['group8'];
			}
			elseif (empty($row['group9']) == FALSE) {
				   $group9 = $row['group9'];
			}
			elseif (empty($row['group10']) == FALSE) {
				   $group10 = $row['group10'];
			}
		}

		
	if (!empty($group1)) {
	$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group1' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group1.'</br>';}
	elseif (!empty($group2)) { 
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group2' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group2.'</br>';}
	elseif (!empty($group3)) { 
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group3' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group3.'</br>';}
	elseif (!empty($group4)) { 
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group4' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group4.'</br>';}
	elseif (!empty($group5)) { 
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group5' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group5.'</br>';}
	elseif (!empty($group6)) {
	$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group6' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group6.'</br>';}
	elseif (!empty($group7)) { 
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group7' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group7.'</br>';}
	elseif (!empty($group8)) {
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group8' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group8.'</br>';}
	elseif (!empty($group9)) { 
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group9' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	echo 'Group 1) '.$group9.'</br>';}
	else { 
		$q = mysqli_query($con,"SELECT * FROM groups WHERE id='$group10' ");
	 while($row = mysqli_fetch_array($q)) {
		$group1 = $row['name'];
	 }
	 echo 'Group 1) '.$group10.'</br>';}

	}
	elseif (isset($_SESSION['myusername']) == FALSE)  {header('../../listgroups.php');}
	else {echo "Please login";}
	?>