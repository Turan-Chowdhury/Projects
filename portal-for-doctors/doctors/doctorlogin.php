<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portal For Doctors</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

<div class="container-fluid">
		<div class="header_top">
			<div style="font-size:40px;color:#ffff;font-weight:bolder;margin-left:30px;padding-top:25px;">
				<span>DOCTOR  PATIENT</span> <br/> 
				<span style="margin-left:60px;">PORTAL</span>
			</div>
		</div>

	<div class="login" style="background-color:#fff;">
			<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Doctor Panel<u/></h3>
				<div class="formstyle" style="float: right;padding-top:20px;padding-bottom:0px;padding-right:0px;padding-left:50px;border: 1px solid light-gray;margin-right:480px; margin-bottom:115px;background-color:#f3f3f8;color:#141313;height:245px;">
					<form action="" method="post">
						<label class="form-group">
							 <input style="margin-left:100px;margin-top:20px;"class="form-control form-control-sm" type="text" name="userid"  placeholder="userid" required>
						</label><br><br>
						<label class="form-group">
							 <input class="form-control form-control-sm" type="password" name="password"  placeholder="password" required>
						</label><br><br>
						<button class="btn btn-success" name="submit" type="submit" style="margin-left:119px;margin-bottom:20px;width: 85px;border-radius: 8px;">Login</button> 
						<a href="../index.php"><button class="btn btn-danger"  type="button" style="margin-left:20px;margin-bottom:20px;width: 85px;border-radius: 8px;">Cancel</button></a>
						

			<?php 
							$_SESSION['doctorstatus']="";
							
							include('../config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '". $_POST['userid']."' AND password= '".$_POST['password']."'";

							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
									$_SESSION["userid"]= $_POST["userid"];
									$_SESSION['doctorstatus']= "yes";
									echo "<script>location.replace('myDetails.php');</script>";
								} else {
									echo "<p style='color:red;margin-left:138px;'>Invalid userid or password</p>";
								}
						$conn->close();		
					}
					
 			?>

				</form> <br>&nbsp;&nbsp;&nbsp;

	</div>

</div>
	
<footer>

	<div class="col-md-12 fsection">
		
		<div class="col-md-4">
			
			<p>XYZ<br>
				turanchwodhury01@gmail.com <br>
				Cell: 01876965895</p>
		</div>
		<div class="col-md-4 share_img">
		
			<a href="" ><img src="../img/fb-free.png" alt="facebok"></a>
			<a href=""><img src="../img/gogle-plud-free.png" alt="google-plus"></a>
			<a href=""><img src="../img/twitter.png" alt="twitter"></a>
			
		</div>
	</div>

</footer>
	
</div>

<script src="../js/bootstrap.min.js"></script>

</body>
</html>

