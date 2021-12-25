<?php 

session_start();

if(isset($_SESSION['auth'])){

	if($_SESSION['auth']!=1){
		
		header("location:login.php");

	}
	
}else{
	header("location:login.php");
}


include "lip/connection.php";

$sazol = NULL;
$kumar = NULL;

if( isset($_POST['register'])){

$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$number = $_POST['pnumber'];
$date = $_POST['date'];
$doctorname = $_POST['doctorname'];



$s = "select * from appointmentinfo where pnumber = '$number' && name = '$name' ";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){

	$sazol= "phone number and name already taken";
}else{

	$reg ="insert into appointmentinfo(name, address, age, pnumber, date, doctorname) values('$name', '$address', '$age', '$number', '$date', '$doctorname')";
	mysqli_query($con, $reg);
	$kumar= "Registration successful";
	header('location:appointment.php');
	
}
}

 ?> 



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>appointment form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body{
			background-image: url('img/app.jpg');
			background-repeat: no-repeat;
			width: 100%;
			background-size: 100%;
			background-position: center top;
		}

		.login-box{

		max-width: 700px;
		margin: 80px auto;

		float: none;
		margin-left: 480px;


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
				<h2>Appointment Form</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" required placeholder=" Name" >
					</div>

					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" required placeholder="Address" >
					</div>

					<div class="form-group">
						<label>Age</label>
						<input type="number" name="age" class="form-control" required placeholder="Age" >
					</div>

					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="pnumber" class="form-control" required placeholder="Phone Number" >
					</div>

					<div class="form-group">
						<label>Appointment Date</label>
						<input type="date" name="date" class="form-control" required placeholder="Appointment Date" >
					</div>

					<div class="form-group">
						<label>Doctor Name</label>
						<input type="text" name="doctorname" class="form-control" value="Prof. Dr. R. K. Saha" >
					</div>

					<button type="submit" class="btn btn-primary" name="register">Appointment</button>
				</form>
			</div>
		</div>
		</div>
	</div>
	
</body>
</html>