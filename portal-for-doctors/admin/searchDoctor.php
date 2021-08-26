<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
			
		<div style="background-color:#fff;"><br>
			<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Search Doctor<u/></h3>
			<div style="float: right;padding-top:25px;margin-right:503px; margin-bottom:30px;;color:#141313;">
				
				<form action="" method="post" enctype="multipart/form-data" class="text-center form-group form-inline">
					<select name="searchBy" class="mr-3">
							<option value="">-Search By-</option>
							<option value="name">Name</option>
							<option value="category">category</option>
   					</select>
					<input class="form-control form-control-sm mr-3" type="text" name="text" placeholder="Text" >	
					<button class="btn btn-info" name="submit" type="submit" style="width:108px;border-radius: 8px;">Search</button> <br>
				</form> 
				
			</div>	
		</div>
		
		<div style="height:80px;"></div>

		<?php

			include('../config.php');
			if(isset($_POST['submit'])){
				
				if($_POST["searchBy"] == 'name') {
					$sql="SELECT * FROM doctor WHERE name = '".$_POST["text"]."' ";
				} else{
					$sql="SELECT * FROM doctor WHERE expertise = '".$_POST["text"]."' ";	
				}
				
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result) >= 1){			
					echo "<table border='1' align='center' cellpadding='10'>
						<tr>
							<th>Doctor Name</th>
							<th>Address</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Expertise</th>
							<th>Fee</th>
							<th>Pic</th>
						</tr>";
					while($row=mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['address']."</td>";
						echo "<td>".$row['contact']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".$row['expertise']."</td>";
						echo "<td>".$row['fee']."</td>";
						echo "<td><img src='../photo/".$row['pic']."' style='width:60px;height:40px;float: left;margin-bottom:0px;margin-left:0px;'/></td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				else{
					echo "<br /><br />";
					echo "<p align='center'>Sorry, No match found for your search result..!!!</p>";
				}

				mysqli_close($conn);
			}
		?> 
		
		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>








