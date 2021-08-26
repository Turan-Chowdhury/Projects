<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

				<?php 
							include('../config.php');
							$sql="SELECT * FROM doctor where userid='" . $_SESSION["userid"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$address=$data[2];
							$contact=$data[3];
							$email=$data[4];
							$expertise=$data[5];
							$fee=$data[7];
							$userid=$data[8];
							$pic = $data[10];

							mysqli_close($conn);
				?>

<br>			
<div class="login" style="background-color:#fff;">
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>My Details<u/></h3>
			<div class="formstyle" style="float: right;padding-top:25px;padding-bottom:20px;padding-right:0px;padding-left:50px;border: 1px solid lightgrey;margin-right:480px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<img src="../photo/<?php echo @$pic; ?>" style="padding-left:40px;width:165px;height:115px;float: left;margin-bottom:10px;margin-left:35px;"/>
					<label>
						 <input type="file" name="pic" value="<?php {echo @$pic;} ?>">
					</label><br><br>

					<label>
						Your Name: <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $name; ?>" required>
					</label><br><br>

 					<label>
						Address: <input class="form-control form-control-sm" type="text" name="address" value="<?php echo $address; ?>"  required>
					</label><br><br>

					<label>
						Contact: <input class="form-control form-control-sm" type="text" name="contact" value="<?php echo $contact; ?>"  required="required" />
					</label><br><br>
 					<label>
						Email: <input class="form-control form-control-sm" type="email" name="email" value="<?php echo $email; ?>" " required>
					</label><br><br>
					<label>
						Userid: <input class="form-control form-control-sm" type="text" name="userid" value="<?php echo $userid; ?>"  disabled>
					</label><br><br>
					<label>
						Expert in: <input class="form-control form-control-sm" type="email" name="email" value="<?php echo $expertise; ?>"  disabled>
					</label><br><br>

					<label>
						Fee: <input class="form-control form-control-sm" type="text" name="fee" value="<?php echo $fee; ?>"  disabled>
					</label><br><br>
					<label>

					<button class="btn btn-success" name="submit" type="submit" style="margin-right:168px;width:108px;border-radius: 8px;">UpdateProfile</button> <br>

			</form> 
	</div>

</div>

				<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

							$sql="UPDATE doctor SET name='" .$_POST["name"]. "' ,address='" .$_POST["address"]."' , contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' ,pic='" .$_POST["pic"]. "' WHERE userid='" . $_SESSION["userid"] . "'";
		
							if (mysqli_query($conn, $sql)) {
								echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 

		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
