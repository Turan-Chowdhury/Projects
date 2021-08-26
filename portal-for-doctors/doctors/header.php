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
		if($_SESSION['doctorstatus'] == ""){
			header("location:doctorlogin.php");
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
			<ul class="navbar-nav  mx-auto">
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="myDetails.php">My Details</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="myAppoinment.php">My appoinments</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="searchPatient.php">Search Patient</a></li>
				<li class="nav-item mr-5"><a class="nav-link text-primary" href="addDescription.php">Add Description</a></li>
			</ul>
			<a href="logout.php"><button class="btn btn-danger"  type="button" style="width: 85px;border-radius: 8px;">Logout</button></a>	
		</div>
	</nav>

