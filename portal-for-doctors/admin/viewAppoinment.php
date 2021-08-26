<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<div class="dashboard" style="background-color:#fff;"><br />
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Patient Who taken Appoinment<u/></h3>
	
	</div>
		<div class="all_user" style="margin:0px auto; ">
			<?php 
				include('../config.php');
				
				$sql="SELECT * FROM booking";
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
					echo "<br />";
					echo "<p align='center'>Sorry, No match found for your search result..!!!</p>";
				}
			?>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>
