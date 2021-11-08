<?php include "header.php"; ?>
<?php  include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add User</title>
</head>
<body>
<div id="admin-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="admin-heading">Add User</h1>
			</div>
			<div class="col-md-offset-3 col-md-6">
				<!-- Form Start -->
				<form  action="" method ="POST" autocomplete="on">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname" class="form-control" placeholder="First Name" required>
					</div>
						<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
					</div>
					<div class="form-group">
						<label>User Name</label>
						<input type="text" name="user" class="form-control" placeholder="Username" required>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label>User Role</label>
						<select class="form-control" name="role" >
							<option value="0">Normal User</option>
							<option value="1">Admin</option>
						</select>
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control" placeholder="E-mail" required>
					</div>
					<input type="submit"  name="adduser" class="btn btn-primary" value="Save" required />
				</form>
				<!-- add user -->
				<?php 
					if(isset($_POST['adduser'])){
						$fname=mysqli_real_escape_string($con,$_POST['fname']);
						$lname=mysqli_real_escape_string($con,$_POST['lname']);
						$username=mysqli_real_escape_string($con,$_POST['user']);
						$password=mysqli_real_escape_string($con,$_POST['password']);
						$role=mysqli_real_escape_string($con,$_POST['role']);
						$email=mysqli_real_escape_string($con,$_POST['email']);
						$sercheemail="SELECT * FROM `testlogin` WHERE `useremial`='$email'";
						$haspassword=password_hash($password,PASSWORD_BCRYPT);
						$query=mysqli_query($con,$sercheemail);
						$numrows=mysqli_num_rows($query);
						if($numrows > 0){
							?>
								<script>
									alert('Email saved');
									location.replace('add-user.php');
								</script>
							<?php 
						}else{
							$datainsert="INSERT INTO `testlogin` (`fastname`, `lastname`, `username`, `userpassword`, `role`, `useremial`) VALUES ('$fname','$lname','$username','$password','$role','$email')";
							$query=mysqli_query($con,$datainsert);
							if($query){
								?>
								<script>
									alert('add successfuly');
									location.replace('users.php');
								</script>
							<?php
							}else{
							?>
								<script>
									alert('add faile');
									location.replace('add-user.php');
								</script>
							<?php
							}
						}
					}
				?>
				<!-- Form End-->
			</div>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
</body>
</html>
