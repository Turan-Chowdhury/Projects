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
							$contact=$data[3];
							$address=$data[4];
							$email=$data[6];

							mysqli_close($conn);

				?>

<br>			
<div class="login" style="background-color:#fff;">
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Registration<u/></h3>
			<div class="formstyle" style="float: right;padding-top:30px;padding-bottom:10px;padding-left:75px;padding-right:0px; border: 1px solid lightgrey;margin-right:472px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						Name: <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>

					<label>
						Contact: <input class="form-control form-control-sm" type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input class="form-control form-control-sm" type="text" name="address" value="<?php echo $address; ?>" placeholder="address" required>
					</label><br><br>

					<label>
						Email: <input class="form-control form-control-sm" type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required>
					</label><br><br>
					
					Blood Group: <label>
						<select name="bgroup" required>
										<option value="">-select-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select>
					</label><br><br>
					
					Organ: <label>
						<select name="organ" required>
										<option value="">-select-</option>
										<option value="Blood">Blood</option>
										<option value="Eyes">Eyes</option>
										<option value="Kidney">Kidney</option>
										<option value="Liver">Liver</option>
										<option value="Lungs ">Lungs </option>
										<option value="Heart">Heart</option>
										<option value="Pancreas">Pancreas</option>
									</select>
					</label><br><br>

					<button class="btn btn-success" name="submit" type="submit" style="margin-right:60px;width:108px;border-radius: 8px;">Submit</button> <br>
			</form> 
		</div>
		
</div>

				<?php

						include('../config.php');
						if(isset($_POST['submit'])){	
							$date = date("d-m-Y");

							$sql="INSERT INTO donation (name,contact,address,email,bgroup,organ,date) 
							VALUES ('" . $_POST["name"] . "', '" . $_POST["contact"] . "', '" . $_POST["address"] . "', '" . $_POST["email"] . "', '" . $_POST["bgroup"] . "', '" . $_POST["organ"] . "', '$date' )";
		
							if (mysqli_query($conn, $sql)) {
								echo "<script>alert(' Registered successfully');</script>";
							} else {
							    echo "<script>alert('There was an Error');</script>";
							}

						mysqli_close($conn);
													}
					?> 

		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
