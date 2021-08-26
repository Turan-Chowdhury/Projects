<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<div class="dashboard" style="background-color:#fff;"><br />
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Change Password<u/></h3>
		<div class="formstyle" style="float: right;padding-top:20px;padding-bottom:0px;padding-right:0px;padding-left:160px;border: 1px solid lightgrey;margin-right:486px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center">
					<label>
						<input class="form-control form-control-sm" type="password" name="curr_pass"  placeholder="Current password" required>
					</label><br><br>
					<label>
						<input class="form-control form-control-sm" type="password" name="new_pass"  placeholder="New password" required>
					</label><br><br>
					<label>
						<input class="form-control form-control-sm" type="password" name="conf_pass"  placeholder=" Confirm new password" required>
					</label><br><br><p></p>
					<button class="btn btn-success" name="submit" type="submit" style="border-radius: 8px; width:85px; margin-right:155px;">Save</button> <br>

			<?php 
					
							
							include('../config.php');
							if(isset($_POST["submit"])){
							
							$sql= "SELECT * FROM patient WHERE email= '" . $_SESSION["email"]."' AND password= '" . $_POST["curr_pass"]."'";

							$query=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($query);

							if($row>0){
								
								if($_POST['new_pass'] == $_POST['conf_pass']){
								
								$sql1="UPDATE patient SET password= '".$_POST["new_pass"]."' WHERE email= '".$_SESSION["email"] ."' ";
								mysqli_query($conn,$sql1);
								mysqli_close($conn);
								echo "<script>alert('Password Has been Changed');</script>";
								
								}else{
									echo "<script>alert('Password did not match');</script>";

								}

							}else{
								echo "<script>alert('Input Correct Password');</script>";
							}
					}		
 			?>

				</form> &nbsp;&nbsp;&nbsp;

			</div>

		</div>

	</div>

	<script src="js/bootstrap.min.js"></script>

	</body>
</html>
