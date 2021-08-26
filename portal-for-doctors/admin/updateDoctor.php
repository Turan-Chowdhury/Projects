<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

<?php 
	include('../config.php');
	
	$userid = $_GET['id'];
	$sql="SELECT * FROM doctor where userid= '$userid' ";

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
	$password = $data[9];

	mysqli_close($conn);
?>

<br>			
<div class="login" style="background-color:#fff;">
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Update Doctor<u/></h3>
			<div class="formstyle" style="float: right;padding-top:25px;padding-bottom:0px;padding-right:0px;padding-left:145px;border: 1px solid lightgrey;margin-right:475px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" enctype="multipart/form-data" class="text-center form-group">
					<img src="../photo/<?php echo @$pic; ?>" style="padding-left:40px;width:165px;height:115px;float: left;margin-bottom:10px;margin-left:15px;"/><br />
					
					<label>
					    <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>
					<label>
						 <input class="form-control form-control-sm" type="text" name="address" value="<?php echo $address; ?>" placeholder="Address" required>
					</label><br><br>
					<label>
						 <input class="form-control form-control-sm" type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Contact" required>
					</label><br><br>

					<label>
						 <input class="form-control form-control-sm" type="email" name="email"  value="<?php echo $email; ?>" placeholder="Email" required>
					</label><br><br>
					
					<label>
						 <select name="expertise" required>
										<option value="">-Expert in-</option>
										<option value="Medicine|1">Medicine</option>
										<option value="Heart|2">Heart</option>
										<option value="Bone|3">Bone</option>
										<<option value="kedney|4">kedney</option>
										<option value="Cardiologist|5">Cardiologist</option>
										<option value="Plastic Surgeon|6">Plastic Surgeon</option>
										<option value="General Physician|7">General Physician</option>
										<option value="Neurologist|8">Neurologist</option>
									</select>
					</label><br><br>
					
					<label>
					   <input class="form-control form-control-sm" type="text" name="fee" value="<?php echo $fee; ?>" placeholder="Fee" required>
					</label><br><br>
					
					<label>
					     <input class="form-control form-control-sm" type="text" name="userid" value="<?php echo $userid; ?>" placeholder="userid" required>
					</label><br><br>
					
					<label>
					   <input class="form-control form-control-sm" type="password" name="password" value="<?php echo $password; ?>" placeholder="password" required>
					</label><br><br>

					<button class="btn btn-success" name="submit" type="submit" style="margin-right:40px;width:108px;border-radius: 8px;">Update</button> <br>

			</form> 
	</div>

</div>

				<?php  
					 if(isset($_POST['submit'])){

						include('../config.php');

							$result = $_POST['expertise'];
							$expertise = explode('|', $result);
							$sql = "UPDATE doctor SET name='" . $_POST["name"] . "', address='" . $_POST["address"] . "', contact='" . $_POST["contact"] . "', email='" . $_POST["email"] . "',
							expertise='$expertise[0]', cat_id='$expertise[1]', fee='" . $_POST["fee"] . "', userid='" . $_POST["userid"] . "', password='" . $_POST["password"] . "' WHERE userid= '$userid' ";
							if ($conn->query($sql) === TRUE) {
								echo "<script>alert('Doctor Updataed Successfully!');</script>";
							} else {
								echo "<script>alert('There was an Error')<script>";
							}

					}
				?>

		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
