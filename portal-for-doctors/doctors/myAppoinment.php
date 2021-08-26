<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<div class="dashboard" style="background-color:#fff;"><br />
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Today's Appoinment<u/></h3>
	</div>
		<div class="all_user" style="margin:0px auto; ">
			<?php 
				include('../config.php');
				$date = date('Y-m-d');
				$sql = " SELECT * FROM booking WHERE userid = '".$_SESSION["userid"]."' AND date = '$date' ";
				$result = mysqli_query($conn,$sql);
				$count = mysqli_num_rows($result);

				if($count>=1){
					echo "<table border='1' align='center' cellpadding='10'>
						<tr>
							<th>Appoinment Hint</th>
							<th>Patient Name</th>
							<th>E-mail</th>
							<th>Contact</th>
							<th>Date</th>
							<th>Time</th>
							<th>Confirmation Status</th>
						</tr>";
					while($row=mysqli_fetch_array($result)){
							echo "<tr>";
							echo "<td>".$row['hint']."</td>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['contact']."</td>";
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
