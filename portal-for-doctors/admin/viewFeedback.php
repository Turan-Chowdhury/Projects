<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<div class="dashboard" style="background-color:#fff;"><br />
	<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Customer<u/></h3>
	
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 5px;">
				<?php 
					include('../config.php');
					$sql = " SELECT * FROM feedback";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='10'>
							<tr>
								<th>ID</th>
								<th>Email</th>
								<th>FeedBack</th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['feedback']."</td>";
								echo "<td><button class='btn btn-danger' type='submit' name='submit' style='color:#fff; border-radius:8px;'>Delete</button></td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
	</div>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>
