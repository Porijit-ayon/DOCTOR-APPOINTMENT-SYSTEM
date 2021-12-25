<?php 

session_start();






include "lip/connection.php";

$sazol = NULL;
$kumar = NULL;

if( isset($_POST['register'])){

$name = $_POST['fname'];
$address = $_POST['address'];
$number = $_POST['pnumber'];
$email = $_POST['email'];
$password = $_POST['pword'];
$cpassword = $_POST['cpword'];

$s = "select * from web where email = '$email'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){

	$sazol= "email already taken";
}elseif($password != $cpassword ){

	$sazol= "Not match password";
}else{

	$reg ="insert into web(name, address, pnumber, email, password) values('$name', '$address', '$number', '$email', '$password')";
	mysqli_query($con, $reg);
	$kumar= "Registration successful"; 
	header('location:login.php');
}
}

 ?> 



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>REGISTRATION</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body{
			background-image: url('img/619974.jpg');
			background-repeat: no-repeat;
			width: 100%;
			background-size: 100%;
			background-position: center top;
		}

		.login-box{

		max-width: 700px;
		margin: 80px auto;

		float: none;
		margin-left: 550px;


		}

		.xx{
			color: red;
			font-size: 18px;
		}

		.yy{
			color: green;
			font-size: 18px;
		}

	</style>
</head>
<body>

	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6">
				<h3 class="xx"><?php echo $sazol; ?> </h3>
				<h3 class="yy"><?php echo $kumar; ?> </h3>
				<h2>Registration Here</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="fname" class="form-control" required placeholder="Full Name" >
					</div>

					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" required placeholder="Address" >
					</div>

					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="pnumber" class="form-control" required placeholder="Phone Number" >
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required placeholder="Email" >
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pword" class="form-control" required placeholder="Password" >
					</div>

					<div class="form-group">
						<label>Confirm password</label>
						<input type="password" name="cpword" class="form-control" required placeholder="Confirm Password" >
					</div>

					<button type="submit" class="btn btn-primary" name="register">Submit</button>
				</form>
			</div>
		</div>
		</div>
	</div>
	
</body>
</html>