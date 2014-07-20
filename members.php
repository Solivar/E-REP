<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<div id="container">
	<div class="content">
<?php
	$con=mysqli_connect("127.0.0.1","root","","erep");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$sql="SELECT id, username FROM user ORDER BY id";

	if ($result=mysqli_query($con,$sql))
	  {
	  // Fetch one and one row
	  $number = 1;
	  while ($row=mysqli_fetch_row($result))
		{
		echo $number . ' ' . $row[1] . "<br />";
		$number++;
		}
	  // Free result set
	  mysqli_free_result($result);
	}

	mysqli_close($con);
?>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>