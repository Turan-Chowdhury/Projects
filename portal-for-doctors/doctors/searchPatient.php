<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
			
		<div style="background-color:#fff;"><br>
			<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Search Patient<u/></h3>
			<div style="float: right;padding-top:25px;margin-right:620px; margin-bottom:30px;;color:#141313;">
			
				<form action="" method="post" enctype="multipart/form-data" class="text-center form-group form-inline">
					<input class="form-control form-control-sm mr-3" type="email" name="email" placeholder="Email" >	
					<button class="btn btn-info" name="submit" type="submit" style="width:108px;border-radius: 8px;">Search</button> <br>
				</form>
				
			</div>	
		</div>
		
		<div style="height:80px;"></div>

		<?php

			include('../config.php');
			if(isset($_POST['submit'])){
				
				$sql="SELECT * FROM patient WHERE email = '".$_POST["email"]."' ";	
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result) >= 1){			
					echo "<table border='1' align='center' cellpadding='10'>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>age</th>
							<th>Contact</th>
							<th>Address</th>
							<th>Blood Group</th>
							<th>email</th>
						</tr>";
					while($row=mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['age']."</td>";
						echo "<td>".$row['contact']."</td>";
						echo "<td>".$row['address']."</td>";
						echo "<td>".$row['bgroup']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				else{
					echo "<br />";
					echo "<p align='center'>Sorry, No match found for your search result..!!!</p>";
				}

			}
		?> 
		</div>
		
		

			<?php 
			
			if(isset($_POST['submit'])){
				
				echo '<div class="dashboard" style="height:85px;background-color:#fff;"></div>
				<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Treatment History<u/></h3>
				<div class="all_user" style="margin:0px auto; ">';
	
				$sql="SELECT * FROM booking WHERE email = '".$_POST["email"]."' AND confirmation_status = 'yes'";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result) >= 1){			
					echo "<table border='1' align='center' cellpadding='10'>
						<tr>
							<th>Appoinment Hint</th>
							<th>Patient Name</th>
							<th>E-mail</th>
							<th>Contact</th>
							<th>Date</th>
							<th>Time</th>
						</tr>";
					while($row=mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row['hint']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".$row['contact']."</td>";
						echo "<td>".$row['date']."</td>";
						echo "<td>".$row['time']."</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				else{
					echo "<p align='center'>No match found..!!!</p>";
				}
				mysqli_close($conn);
			}
			?>
		</div>
		
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>








