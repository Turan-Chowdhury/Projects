<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

<br>			
<div class="login" style="background-color:#fff;">
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Add Doctor<u/></h3>
			<div class="formstyle" style="float: right;padding-top:25px;padding-bottom:0px;padding-right:0px;padding-left:135px;border: 1px solid lightgrey;margin-right:480px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" enctype="multipart/form-data" class="text-center form-group">
					<label>
					    <input class="form-control form-control-sm" type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>
					<label>
						 <input class="form-control form-control-sm" type="text" name="address" value="" placeholder="Address" required>
					</label><br><br>
					<label>
						 <input class="form-control form-control-sm" type="text" name="contact" value="" placeholder="Contact" required>
					</label><br><br>

					<label>
						 <input class="form-control form-control-sm" type="email" name="email"  value="" placeholder="Email" required>
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
					   <input class="form-control form-control-sm" type="text" name="fee" value="" placeholder="Fee" required>
					</label><br><br>
					
					<label>
					     <input class="form-control form-control-sm" type="text" name="userid" value="" placeholder="userid" required>
					</label><br><br>
					
					<label>
					   <input class="form-control form-control-sm" type="password" name="password" value="" placeholder="password" required>
					</label><br><br>
					<label>
						 Choose Image: <input type="file" name="pic" required>
					</label><br><br>

					<button class="btn btn-success" name="submit" type="submit" style="margin-right:40px;width:108px;border-radius: 8px;">Add</button> <br>

			</form> 
	</div>

</div>

				<?php  
						 if(isset($_POST['submit'])){
							 
							$file_name = $_FILES['pic']['name'];
							$target_dir = "../photo/". $file_name;
							$tmp_dir = $_FILES['pic']['tmp_name'];
							
							$uploadOk = 0;
							//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

						    $check = getimagesize($tmp_dir);
						    if($check !== false) {
						        $uploadOk = 1;
						    } else {
						        echo "File is not an image.";
						        $uploadOk = 0;
						    }

							if (file_exists($target_dir)) {
							    echo "<script>alert('Sorry, file already exists.');</script>";
							    $uploadOk = 0;
							}

							//if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
								//echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
								//$uploadok=0;
							//}	
							//else{
							if(move_uploaded_file($tmp_dir , $target_dir) and $uploadOk) {
									include('../config.php');
									$sql1 = "SELECT * FROM doctor WHERE userid='".$_POST["userid"]."' OR email= '" . $_POST["email"] . "' ";
									$result = $conn->query($sql1);
									if($result->num_rows > 0){
										 echo "<script>alert('Sorry, Userid or E-mail already exist!');</script>";
									}
									else{
										$result = $_POST['expertise'];
										$expertise = explode('|', $result);
										$sql = "INSERT INTO doctor (name,address,contact,email,expertise,cat_id,fee,userid,password,pic)
												VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '$expertise[0]', '$expertise[1]', '" . $_POST["fee"] . "','" . $_POST["userid"] . "','" . $_POST["password"] . "','" . $_FILES["pic"]["name"] ."' )";

										if ($conn->query($sql) === TRUE) {
											echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
										} else {
											echo "<script>alert('There was an Error')<script>";
										}
									}

									$conn->close();
							} else {
								echo "<script>alert('sorry there was an error!');</script>";
							}
							//}
					}
				?>

		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
