<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<div class="dashboard" style="background-color:#fff;"><br>
		<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>All registered Doctor List<u/></h3>				
	</div>	
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='10'>
							<tr>
								<th>Doctor Id</th>	
								<th>Name</th>								
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expert in</th>
								<th>Fee</th>
								<th>Userid</th>
								<th>Password</th>
								<th>Picture</th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['doc_id']."</td>";
								echo "<td>".$row['name']."</td>";							
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['expertise']."</td>";							
								echo "<td>".$row['fee']."</td>";
								echo "<td>".$row['userid']."</td>";
								echo "<td>".$row['password']."</td>";
								echo "<td><img src='../photo/".$row['pic']."' style='width:60px;height:40px;float: left;margin-bottom:0px;margin-left:0px;'/></td>";
								echo "<td><a href='updateDoctor.php?id=".$row['userid']."'><button class='btn btn-success' type='submit' style='color:#fff; border-radius:8px;'>Edit</button></a><a href='deleteDoctor.php?id=".$row['userid']."'><button class='btn btn-danger' type='submit' style='color:#fff; border-radius:8px;'>Delete</button></a></td>";					
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						echo "<br />";
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
	</div>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>
