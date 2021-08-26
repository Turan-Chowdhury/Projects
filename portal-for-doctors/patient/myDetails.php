<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

				<?php 
							include('../config.php');
							$sql="SELECT * FROM patient where email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$age=$data[2];
							$contact=$data[3];
							$address=$data[4];
							$bgroup=$data[5];
							$email=$data[6];

							mysqli_close($conn);

				?>

<br>			
<div class="login" style="background-color:#fff;">
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>My Details<u/></h3>
			<div class="formstyle" style="float: right;padding-top:30px;padding-bottom:20px;padding-left:75px;padding-right:0px; border: 1px solid lightgrey;margin-right:472px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						Your Name: <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>

					<label>
						Age: <input class="form-control form-control-sm" type="number" name="age"  value="<?php echo $age; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input class="form-control form-control-sm" type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input class="form-control form-control-sm" type="text" name="address" value="<?php echo $address; ?>" placeholder="address" required>
					</label><br><br>
					<label>
						Blood Group: <input class="form-control form-control-sm" type="email" name="bgroup" value="<?php echo $bgroup; ?>" placeholder="email" disabled>
					</label><br><br>

					<label>
						Email: <input class="form-control form-control-sm" type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required>
					</label><br><br>

					<button class="btn btn-success" name="submit" type="submit" style="margin-right:-50px;width:108px;border-radius: 8px;">UpdateProfile</button> <br>
			</form> 
		</div>
		
		<div class="dashboard" style="height:425px;background-color:#fff;"></div>
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Treatment History<u/></h3>
		<div class="all_user" style="margin:0px auto; ">
			<?php 
				include('../config.php');
				
				$sql="SELECT * FROM booking WHERE email = '".$_SESSION["email"]."' AND confirmation_status = 'yes'";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result) >= 1){			
					echo "<table border='1' align='center' cellpadding='10'>
						<tr>
							<th>Hint</th>
							<th>My Email</th>
							<th>My Contact</th>
							<th>My Disease Type</th>
							<th>My Doctor</th>
							<th>Appoinment Date</th>
							<th>Time</th>
							<th>Confirmation Status</th>
						</tr>";
					while($row=mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row['hint']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".$row['contact']."</td>";
						echo "<td>".$row['category']."</td>";
						echo "<td>".$row['d_name']."</td>";
						echo "<td>".$row['date']."</td>";
						echo "<td>".$row['time']."</td>";
						echo "<td>".$row['confirmation_status']."</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				else{
					echo "<p align='center'>No match found..!!!</p>";
				}
			?>
		</div>
		
</div>

				<?php

						include('../config.php');
						if(isset($_POST['submit'])){	

							$sql="UPDATE patient SET name='" .$_POST["name"]. "' ,age='" .$_POST["age"]. "' ,contact='" .$_POST["contact"]. "' ,address='" .$_POST["address"]."' ,email='" .$_POST["email"]. "' WHERE email='" .$_SESSION["email"]. "'";
		
							if (mysqli_query($conn, $sql)) {
								echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was an Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 

		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
