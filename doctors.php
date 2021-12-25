
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



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>doctors info</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/mystyles.css" rel="stylesheet">
	
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

		.team-heading{
			margin-bottom: 80px;


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


			

	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2 style="text-transform: uppercase;  font-weight: bold;">our doctors</h2>
					<h4>At Doctors Services we believe that physicians should be fairly compensated for all services they provide and that patients should be informed of what uninsured services are and why they are paying for them. Our Annual Fee/Block Fee Billing program is fully customizable, professionally run, and most importantly it educates patients and provides them with exemplary customer service.</h4>
				</div>
				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="../img/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Mohammad Jahangir Talukder</h3>
						<p>Qualification: MBBS(Ctg), MRCP(UK)<br>
						Specialist: Internal Medicine<br>
						Designation: Consultant<br>
						Experiences: 40 Years<br>
						Chamber: United Hospital Ltd, OPD 1, Room 2, Ground Floor<br>
						Visiting Hours: 9.00 am- 5.00 pm (6 days except Friday)<br>
						Phone for serial: 02 9852466</p>

						
					</div>
				</div>
				<!-- people1 end -->


				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="../img/member2.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Prof. Dr. R. K. Saha</h3>
						<p>
							MBBS, FCPS ( Med)<br>
							Designation: Professor Of Medicine<br>
							Organization: Uttara Crescent Hospital and Uttara Aichi Hospital.
							Ex Principal and Professor and Head Dept of Medicine, Sher-E-Bangla Medical College, Barisal and Uttara Women's Medical College Hospital, Dhaka<br>
							Chamber: Uttara Crescent Hospital and Uttara Aichi Hospital.<br>
							Phone: +88 01711245746
						</p>

						
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="../img/member3.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Abdullah Al Mamun</h3>
						<p>
							MBBS, FCPS (Medicine), MACP ( USA ), FACP
							Ex-Associate Professor
							Khulna Medical Collage Hospital <br>
							Designation : Consultant <br>
							Expertise : Internal Medicine <br>
							Organization: Apollo Hospitals Dhaka<br>
							Chamber: Apollo Hospitals Dhaka<br>
							Location: Plot # 81, Block # E, Basudhara R/A, Dhaka - 1229<br>
							Phone: +880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678
						</p>

						
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="../img/member4.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Afsana Begum</h3>
						<p>
							Qualification : MBBS, FCPS <br>
							Designation : Specialist<br>
							Expertise : Internal Medicine<br>
							Organization: United Hospital Limited<br>
							Chamber: United Hospital Limited<br>
							Location: Plot # 15, Road # 71, Gulshan - 2, Dhaka - 1212, Bangladesh<br>
							Phone: +880-2-8836000
						</p>

						
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="../img/member5.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Anup Kumar Saha</h3>
						<p>
							Qualification : MBBS, FCPS ( Medicine ), MD ( Internal Medicine ), FACP ( America ) <br>
							Designation : Associate Professor<br>
							Expertise : Medicine<br>
							Organization: Sir Salimullah Medical College and Mitford Hospital<br>							Chamber: Monowara Hospital (pvt) Ltd<br>
							Phone: +880-2-8318135, 8319802
						</p>

						
					</div>	
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="../img/member6.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Bristy Paul </h3>
						<p>
							Qualification : MBBS, FCPS ( Medicine ), MD ( Internal Medicine ), FACP ( America ) <br>
							Designation : Medical Officer<br>
							Expertise : Medicine<br>
							Organization: Bangabandhu Sheikh Mujib Medical University<br>
							Chamber: Dr. Azmal Hospital Ltd.<br>
							Phone: +880-2-8051974, 9005085 

						 </p>

						
					</div>
				</div>
				<!-- people1 end -->

				
				
			</div>
		</div>
	</section><!-- end of team section -->

					
					
			
		
	</div>	<!--/.main-->
	

		
</body>
</html>