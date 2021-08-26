<?php session_start();  ?>
<?php include('header.php'); ?>

	<div class="login" style="background-color:#fff;">
		<h3 class="text-center mx-auto text-primary" style="background-color:light; text-decoration:underline;">Congratulations....!!!</h3>
		 		<h5 class="text-center text-success">You have been registered!</h5>
			<div class="formstyle" style="float: right;padding-left:50px; padding-right:0px; padding-bottom:0px; padding-top:25px;border: 1px solid light-gray;margin-right:475px; margin-bottom:50px;background-color:#f3f3f8;color:#141313;height:245px;"><br>
				<form action="" method="post">
					<label class="form-group">
						 <input style="margin-left:100px;"class="form-control form-control-sm" type="email" name="email"  placeholder="email" required>
					</label><br><br>
					<label class="form-group">
						 <input class="form-control form-control-sm" type="password" name="password"  placeholder="password" required>
					</label><br><br>
					<button class="btn btn-success" name="submit" type="submit" style="margin-left:240px;margin-bottom:20px;width: 85px;border-radius: 8px;">Login</button> 

			<?php 
					$_SESSION['patientstatus']="";
					
					include('config.php');
					if(isset($_POST["submit"])){


					$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

					$result = $conn->query($sql);

							if ($result->num_rows > 0) {
									$_SESSION["email"]= $_POST["email"];	
									$_SESSION['patientstatus']= "yes";
									echo "<script>location.replace('patient/myDetails.php');</script>";
								} 
							else {
									echo "<span style='color:red;margin-left:140px;'>Invalid email or password</span>";
								}
					$conn->close();		
					}
					
 			?>

				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>
	</div>

</div>

 <?php include('footer.php'); ?>

	</div>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>
