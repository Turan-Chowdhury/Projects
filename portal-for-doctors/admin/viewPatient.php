<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
			
		<div style="background-color:#fff;"><br>
			<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Patient List<u/></h3>
		</div>

		<?php

			include('../config.php');
			
				$sql="SELECT * FROM patient";	
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
		?> 
		</div>
		
		</div>
		
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>








