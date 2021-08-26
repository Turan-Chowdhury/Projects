<?php include('header.php'); ?>

	<div class="recipient_reg" style="background-color:#fff;">
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Patient Registration<u/></h3>

		<div class="formstyle" style="float: right;padding-top:25px; padding-bottom:25px; padding-right:0px; padding-left:135px;border: 1px solid lightgrey;margin-right:466px; margin-bottom:30px;background-color:#F1F4F8;color:#141313;">
		<form enctype="multipart/form-data" method="post" class="text-center form-group">
			 <div class="col-md-12">
				  
			 		<label>
						<input class="form-control form-control-sm" type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>

					<label>
						<input class="form-control form-control-sm" type="number" name="age"  placeholder="age" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						<input class="form-control form-control-sm" type="number" name="contact"  placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						<input class="form-control form-control-sm" type="text" name="address" value="" placeholder="address">
					</label><br><br>
					<label>
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
					<label>
						 <input class="form-control form-control-sm" type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					<label>
						<input class="form-control form-control-sm" type="password" name="password"  value="" placeholder="password" required>
					</label><br><br>
					
					<button class="btn btn-success" name="submit" type="submit" style="margin-left:200px;width: 85px;border-radius: 8px;">Register</button> <br>
				
			</div>	

				</form>
			</div>

	</div>


	</div>

	<script src="js/bootstrap.min.js"></script>

				<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM patient WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO patient (name,age,contact,address,bgroup,email, password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('patient_success_msg.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 

</body>
</html>