<?php

session_start();

if(isset($_SESSION['aoth'])){

	if($_SESSION['aoth']!=1){
		
		header("location:login.php");

	}
	
}else{
	header("location:login.php");
}


include "lip/connection.php";

$sql = "SELECT * FROM appointmentinfo";
$result = $conn->query($sql);
$count = $result -> num_rows;

 ?>

 <?php


include "lip/connection.php";

$sql = "SELECT * FROM web";
$result = $conn->query($sql);
$counting = $result -> num_rows;

 ?>

  <?php


include "lip/connection.php";

$sql = "SELECT * FROM messageinfo";
$result = $conn->query($sql);
$countingg = $result -> num_rows;

 ?>




<?php 
include "lip/connection.php";

$sql = "SELECT * FROM web ";
$result = $conn->query($sql);
$count = $result -> num_rows;


 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user info</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.xxx{
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Doctors</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger"></span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right"></small>
										<a href="#"><strong></strong>  <strong></strong>.</a>
									<br /><small class="text-muted"></small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right"></small>
										<a href="#"> <strong></strong>.</a>
									<br /><small class="text-muted"></small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong></strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info"></span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em>
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 
									<span class="pull-right text-muted small"></span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="sazol.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="userinfo.php"><em class="fa fa-users">&nbsp;</em> User info</a></li>
			<li><a href="appointmentinfo.php"><em class="fa fa-user">&nbsp;</em> Appointment info</a></li>
			<li><a href="doctors.php"><em class="fa fa-user-md">&nbsp;</em> Doctors</a></li>
			<li><a href="message.php"><em class="fa fa-clone">&nbsp;</em> Message</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fas fa-user-md color-blue"></em>
							<div class="large">6</div>
							<div class="text-muted">Total Doctors</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fas fa-user  color-orange"></em>
							<div class="large"><?php echo $count; ?></div>
							<div class="text-muted">Total Patient</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo $counting; ?></div>
							<div class="text-muted">Total Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl far fa-comments color-red"></em>
							<div class="large"><?php echo $countingg; ?></div>
							<div class="text-muted">Message</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->


			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default xxx">

					<h2>User Information</h2><br>

	<h4>Number of row <?php echo $count; ?></h4>
	<table class="table table-striped table-dark">
		<tr>
			
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Password</th>

		</tr>
<?php if ($result -> num_rows > 0 ){ ?>
	<?php while($u_row = $result -> fetch_assoc()){ ?>
		<tr>
			<td><?php echo $u_row['id']; ?></td>
			<td><?php echo $u_row['name']; ?></td>
			<td><?php echo $u_row['address']; ?></td>
			<td><?php echo $u_row['pnumber']; ?></td>
			<td><?php echo $u_row['email']; ?></td>
			<td><?php echo $u_row['password']; ?></td>
			
		</tr>
	<?php } ?>
<?php }else { ?>

		<tr>
			<td>no data</td>
			<td>no data</td>
			<td> no data</td>
			<td>no data</td>
			<td>no data</td>
			<td>no data</td>
		</tr>
	<?php } ?>
	</table>
					
					
				</div>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>