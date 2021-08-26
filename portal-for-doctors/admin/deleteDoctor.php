
<?php		
	include('../config.php');
	
	$userid = $_GET['id'];
	$sql = "DELETE FROM doctor WHERE userid = '$userid' ";
	
	if (mysqli_query($conn, $sql)) {
		header("location:viewDoctor.php");
	} else {
		header("location:viewDoctor.php");
	}

	mysqli_close($conn);

?> 