<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
			
		<div style="background-color:#fff;"><br>
			<h3 class="text-center mx-auto" style="background-color:light;color: dark;"><u>Add Description<u/></h3>
			<div style="float: right;padding-top:25px;margin-right:620px; margin-bottom:30px;;color:#141313;">
			
				<form action="" method="post" enctype="multipart/form-data" class="text-center form-group form-inline">
					<input class="form-control form-control-sm mr-3" type="email" name="email" placeholder="Patient Email" >	
					<button class="btn btn-info" name="search" type="submit" style="width:108px;border-radius: 8px;">Search</button> <br>
				</form>
				
			</div>	
		</div>
		
		<div style="height:80px;"></div>

		<?php

			include('../config.php');
			if(isset($_POST['search'])){
				
				$sql="SELECT * FROM patient WHERE email = '".$_POST["email"]."' ";	
				$result = mysqli_query($conn,$sql);
				$data = mysqli_fetch_array($result);
				?>
				<div class="formstyle" style="float: right;padding-top:25px;padding-bottom:0px;padding-right:0px;padding-left:75px;border: 1px solid lightgrey;margin-right:480px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
					<form action="" method="post" class="text-center form-group">
						<label>
							ID: <input class="form-control form-control-sm" type="text" name="id" value="<?php echo $data['id']; ?>" required>
						</label><br><br>

						<label>
							Name: <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $data['name']; ?>"  required>
						</label><br><br>

						<label>
							Treatment For: <input class="form-control form-control-sm" type="text" name="trt_for"   required>
						</label><br><br>
						
						<label>
							Treatment: <input class="form-control form-control-sm" type="text" name="trt" required>
						</label><br><br>
						
						<label>
							Note: <input class="form-control form-control-sm" type="text" name="note"  required>
						</label><br><br>

						<button class="btn btn-info" name="submit" type="submit" style="margin-right:20px;width:108px;border-radius: 8px;">Submit</button> <br>

					</form> 
				</div>
			<?php }	?>
		
		</div>
		
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>








