<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portal For Doctors</title>
	<link rel="stylesheet" href="../patient/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
?>

<div class="container-fluid">

	<div class="header_top">
			<div style="font-size:40px;color:#ffff;font-weight:bolder;margin-left:30px;padding-top:25px;">
				<span>DOCTOR  PATIENT</span> <br/> 
				<span style="margin-left:60px;">PORTAL</span>
			</div>
		</div>
	
	<nav class="navbar navbar-light bg-light navbar-expand-md">
		<div class="container">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="addDoctor.php">Add Doctor</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="viewDoctor.php">View Doctor</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="viewPatient.php">View Patient</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="viewAppoinment.php">View Appoinment</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="searchDoctor.php">Search Doctor</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="viewFeedback.php">View Feedback</a></li>
			</ul>
			<a href="logout.php"><button class="btn btn-danger"  type="button" style="width: 85px;border-radius: 8px;">Logout</button></a>
		</div>
	</nav>

