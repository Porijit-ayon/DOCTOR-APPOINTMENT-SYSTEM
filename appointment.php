<?php

session_start();




// login.....
if(isset($_SESSION['auth'])){

	if($_SESSION['auth']!=1){
		
		header("location:login.php");

	}
	
}else{
	header("location:login.php");
}



include "lip/connection.php";

$sql = "SELECT * FROM appointmentinfo";
$result = $con->query($sql);
$count = $result -> num_rows;


if ($count > 0 ) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $name= $row["name"];
     $id = $row["id"];
     $address= $row["address"];
     $age= $row["age"];
     $date= $row["date"];
     $number= $row["pnumber"];
     $doctorname= $row["doctorname"];
  }

  $_SESSION['name']= $name;

} else {
  echo "0 results";
}
$con->close();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>appointment</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<style>
		body{
			text-align: center;
			margin-top: 100px;
		}
		
		.aa{
			color: green;
		}

		span{
			color: blue;
		}

		h2{

			
		}

	</style>
	
</head>
<body>

	<div class="container">

		<h2 class="aa">Appointment successfull</h2><br>

		<h2>Doctor Name : <span ><?php echo $doctorname; ?></span>  </h2>
		<h2>Patient Name : <span ><?php echo isset($_SESSION['name'])? $_SESSION['name']:"";  ?></span>  </h2>
		<h2>Patient Address : <span><?php echo $address;  ?></span> </h2>
		<h2>Patient Age : <span><?php echo $age; ?></span> </h2>
		<h2>Patient Phone Number: <span><?php echo $number; ?></span> </h2>
		<h2>Appoint Date : <span><?php echo $date; ?></span> </h2>
		<h2>Serial No : <span><?php echo $id; ?></span> </h2>
		


	</div>
	
</body>
</html>