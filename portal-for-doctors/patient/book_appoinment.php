<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

		<?php
			  $db = new mysqli('localhost','root','','project');
			  
			  $query = "SELECT id,cat FROM category";
			  $result = $db->query($query);

			  while($row = $result->fetch_assoc()){
			    $categories[] = array("id" => $row['id'], "val" => $row['cat']);
			  }

			  $query = "SELECT cat_id, name FROM doctor";
			  $result = $db->query($query);

			  while($row = $result->fetch_assoc()){
			    $subcats[$row['cat_id']][] = array("val" => $row['name']);
			  }

			  $jsonCats = json_encode($categories);
			  $jsonSubCats = json_encode($subcats);

		?>     

	<div class="recipient_reg" style="background-color:#fff;"><br>
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Booking Appoinment<u/></h3>

		<div class="formstyle" style="float: right;padding-left:145px; padding-top:25px; border: 1px solid lightgrey;margin-right:465px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
					<label>
						<input class="form-control form-control-sm" type="text" name="hint" placeholder="Use A Hint To Cancel Later" >	
					</label><br><br>
					
					<label>
						<input class="form-control form-control-sm" type="text" name="name" placeholder="Your Name" >	
					</label><br><br>
			 
					<label>
						<input class="form-control form-control-sm" type="email" name="email" placeholder="Your Registered Email" >	
					</label><br><br>
					
					<label>
						<input class="form-control form-control-sm" type="number" name="contact"  placeholder="registered contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
					
					<label>
						 <select id='categoriesSelect' name="cat">
							<option value="">-select Category-</option>
   						</select>
					</label><br><br>
					
					<label>
						<select id='subcatsSelect' name="d_name">
							<option value="">-select Doctor-</option>
    					</select>			
					</label><br><br>
					
					<label>
						<input class="form-control form-control-sm" type="date" name="dates" placeholder="choose your date" >	
					</label><br><br>
					
					<label>
						<select name="time">
									<option value="">-select time-</option>
									<option value="9.00am-10.00am">09.00am-10.00am</option>
									<option value="10.00am-11.00am">10.00am-11.00am</option>
									<option value="11.00am-12.00pm">11.00am-12.00pm</option>
									<option value="12.00pm-01.00pm">12.00pm-01.00pm</option>
									<option value="03.00pm-04.00pm">03.00pm-04.00pm</option>
									<option value="04.00pm-05.00pm">04.00pm-05.00pm</option>
									<option value="05.00pm-06.00pm">05.00pm-06.00pm</option>
									<option value="07.00pm-08.00pm">07.00pm-08.00pm</option>
									<option value="08.00pm-09.00pm">08.00pm-09.00pm</option>
      
    					</select>		
					</label><br><br>

					<label>
						<select name="payment">
									<option value="">-Payment Method-</option>
									<option value="DBBL Rocket">DBBL Rocket</option>
									<option value="bKash">bKash</option>
						</select>				
					</label><br><br>
					
					<button class="btn btn-success" name="submit" type="submit" style="margin-right:25px;width:108px;border-radius: 8px;">Book</button> <br><p></p>
				
				</div>	
			</form>
		</div>
	</div>
</div>

	<script type='text/javascript'>
	
		  <?php
			echo "var categories = $jsonCats; \n";
			echo "var subcats = $jsonSubCats; \n";
		  ?>
		  
		  loadCategories();
		  
		  function loadCategories(){
			var select = document.getElementById("categoriesSelect");
			select.onchange = updateSubCats;
			for(var i = 0; i < categories.length; i++){
			  select.options[i+1] = new Option(categories[i].val,categories[i].id);       
			}
		  }
		  
		  function updateSubCats(){
			var catSelect = this;
			var cat_id = this.value;
			var subcatSelect = document.getElementById("subcatsSelect");
			subcatSelect.options.length = 0; 
			
			for(var i = 0; i < subcats[cat_id].length; i++){
			  subcatSelect.options[i] = new Option(subcats[cat_id][i].val);
			}
		  }
	  
    </script>

	<script src="js/bootstrap.min.js"></script>

					<?php
						
							include('../config.php');
							if(isset($_POST['submit'])){
								
								$sql="SELECT cat FROM category WHERE id = '" . $_POST["cat"] . "'";
								$q=mysqli_query($conn,$sql);
								$data=mysqli_fetch_array($q);
								
								$sqll="SELECT userid FROM doctor WHERE name = '" . $_POST["d_name"] . "' AND expertise = '$data[0]' ";
								$res=mysqli_query($conn,$sqll);
								$userid=mysqli_fetch_array($res);
								
								$sql = "INSERT INTO booking (hint, name, email, contact, category, d_name, userid, date, time, payment_method)
								VALUES ('" . $_POST["hint"] . "', '" . $_POST["name"] . "', '" . $_POST["email"] . "','" . $_POST["contact"] . "','$data[0]', '" . $_POST["d_name"] . "','$userid[0]', '" . $_POST["dates"] . "','". $_POST["time"] . "', '" . $_POST["payment"] . "')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Please make your payment to (01876-694630), in order to confirm your Booking. Use your hint as Reference.');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 
	</body>
</html>

