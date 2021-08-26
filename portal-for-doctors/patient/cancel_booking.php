<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
			
		<div style="background-color:#fff;"><br>
			<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Cancel Booking<u/></h3>
			<div style="float: right;padding-top:25px;margin-right:625px; margin-bottom:30px;;color:#141313;">
				
				<form action="" method="post" enctype="multipart/form-data" class="text-center form-group form-inline">
					<input class="form-control form-control-sm mr-3" type="text" name="hint" placeholder="Appoinment Hint" >	
					<button class="btn btn-warning" name="submit" type="submit" style="width:108px;border-radius: 8px;">Delete</button> <br>
				</form> 
				
			</div>	
		</div>

		<?php

			include('../config.php');
			if(isset($_POST['submit'])){
				$sql = "DELETE FROM booking WHERE hint = '".$_POST["hint"]."'";


				if (mysqli_query($conn, $sql)) {
					echo "<script>alert('Your booking has been Canceled!');</script>";
				} else {
					echo "<script>alert('There was an Error');</script>";
				}

				mysqli_close($conn);
			}
		?> 
		
		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>
</html>








