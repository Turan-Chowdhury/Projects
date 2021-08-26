<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
			
		<div style="background-color:#fff;"><br>
			<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Search Donor<u/></h3>
			<div style="float: right;padding-top:25px;margin-right:485px; margin-bottom:30px;;color:#141313;">
				
				<form action="" method="post" enctype="multipart/form-data" class="text-center form-group form-inline">
					<select name="bgroup" class="mr-3" required>
						<option value="">-Blood Group-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
					</select>
					<select name="organ" class="mr-3" required>
						<option value="">-Organ-</option>
						<option value="Blood">Blood</option>
						<option value="Eyes">Eyes</option>
						<option value="Kidney">Kidney</option>
						<option value="Liver">Liver</option>
						<option value="Lungs ">Lungs </option>
						<option value="Heart">Heart</option>
						<option value="Pancreas">Pancreas</option>
					</select>	
					<button class="btn btn-info" name="submit" type="submit" style="width:108px;border-radius: 8px;">Search</button> <br>
				</form> 
				
			</div>	
		</div>
		
		<div style="height:80px;"></div>

		<?php

			include('../config.php');
			if(isset($_POST['submit'])){

				$sql="SELECT * FROM donation WHERE bgroup = '".$_POST["bgroup"]."' AND organ = '".$_POST["organ"]."' ";	
				
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result) >= 1){			
					echo "<table border='1' align='center' cellpadding='10'>
						<tr>
							<th>Name</th>
							<th>Contact</th>
							<th>Address</th>
							<th>Email</th>
							<th>Blood Group</th>
							<th>Organ</th>
							<th>Date</th>
						</tr>";
					while($row=mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['contact']."</td>";
						echo "<td>".$row['address']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".$row['bgroup']."</td>";
						echo "<td>".$row['organ']."</td>";
						echo "<td>".$row['date']."</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				else{
					echo "<br />";
					echo "<p align='center'>Sorry, No match found for your search result..!!!</p>";
				}

				mysqli_close($conn);
			}
		?> 
		
		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>








