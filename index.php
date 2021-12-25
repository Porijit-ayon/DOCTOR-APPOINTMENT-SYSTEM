<?php 

session_start();






// start session & cookie
if(isset($_SESSION['auth'])){

	if($_SESSION['auth']!=1){
		
		header("location:login.php");

	}
	
}else{

	if (isset($_COOKIE['auther'])) {
		if ($_COOKIE['auther']!=true) {
			header("location:login.php");
			
		}
		
	}else{
		header("location:login.php");

	}
	
}

// database set
include "lip/connection.php";

$sazol = NULL;
$kumar = NULL;

if( isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['pnumber'];
$message = $_POST['message'];


$s = "select * from messageinfo where pnumber = '$number' && message = '$message' ";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){

	$sazol= "number and message already taken";

}else{

	$reg ="insert into messageinfo(name, email, pnumber, message) values('$name', '$email', '$number', '$message')";
	mysqli_query($con, $reg);
	$kumar= "Registration successful"; 
	
}
}

 
 ?> 

 



<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTORS</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse , manu" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">about us</a></li>
                            <li><a class="menu" href="#service"> service </a></li>
					        
					        <li><a class="menu" href="#team">our doctors</a></li>
					       
					        
					        <li><a class="menu" href="#contact"> contact us</a></li>
					        <li><a class="menu" href="logout.php"> logout</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>about us</h2>
				<h4>At Doctors Services we believe that physicians should be fairly compensated for all services they provide and that patients should be informed of what uninsured services are and why they are paying for them. Our Annual Fee/Block Fee Billing program is fully customizable, professionally run, and most importantly it educates patients and provides them with exemplary customer service.</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>
							<h3>Children’s specialist</h3>
							<p>Your child will encounter numerous medical professionals from the moment they are born. These people are there for your child as much as they are there for you to answer questions, diagnose illness, and ensure overall health. Some children only ever see the family doctor, while others may need an allergist or orthodontist. Here are just some of the medical professionals your child may come into contact with.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>W</h1>
							</div>

							<h3>Gynecologist specialist</h3>
							<p>A gynecologist is a medical doctor that specializes in women's reproductive systems. Separate doctors that specialize in treating women have existed for centuries, and these ancient specialists are the forefathers of today's gynecological doctors and researchers. Gynecologists are often at the forefront of debates over women's health and healthcare. While a general physician may be able to </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Medicine specialist</h3>
							<p>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.Medicine aims to promote and maintain health and wellbeing.Conventional modern medicine is sometimes called allopathic medicine. It involves the use of drugs or surgery, often supported by counseling </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4>Doctors Services Group is the industry leader for uninsured service billing programs and also offers physicians a suite of additional tools and services that will transform practice productivity and enhance patient care.</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="img/service1.png" alt="">
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="img/service2.png" alt="">
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="img/service3.png" alt="">
							</div>
						</div>
						<h3>knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="img/service4.png" alt="">
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>our doctors</h2>
					<h4>At Doctors Services we believe that physicians should be fairly compensated for all services they provide and that patients should be informed of what uninsured services are and why they are paying for them. Our Annual Fee/Block Fee Billing program is fully customizable, professionally run, and most importantly it educates patients and provides them with exemplary customer service.</h4>
				</div>
				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member1.jpg" alt="member-1">
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

						<a href="appointmentform.php" target="blank"><button type="button" class="btn butn" >Appointment</button></a>
					</div>
				</div>
				<!-- people1 end -->


				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member2.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Prof. Dr. R. K. Saha</h3>
						<p>
							MBBS, FCPS ( Med)<br>
							Designation: Professor Of Medicine<br>
							Organization: Uttara Crescent Hospital and Uttara Aichi Hospital.
							Ex Principal and Professor and Head Dept of Medicine<br>
							Chamber: Uttara Crescent Hospital and Uttara Aichi Hospital.<br>
							Phone: +88 01711245746
						</p>

						<a href="appointmentform1.php" target="blank"><button type="button" class="btn butn" >Appointment</button></a>
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member3.jpg" alt="member-1">
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
							Chamber: Apollo Hospitals Dhaka<br>
							Location: Plot # 81, Block # E, Basudhara R/A, <br>
							Phone: +880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678
						</p>

						<a href="appointmentform.php" target="blank"><button type="button" class="btn butn" >Appointment</button></a>
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member4.jpg" alt="member-1">
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

						<a href="appointmentform.php" target="blank"><button type="button" class="btn butn" >Appointment</button></a>
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member5.jpg" alt="member-1">
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

						<a href="appointmentform.php" target="blank"><button type="button" class="btn butn" >Appointment</button></a>
					</div>
				</div>
				<!-- people1 end -->

				<!-- people1 -->
				<div class="col-md-3 member single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member6.jpg" alt="member-1">
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

						<a href="appointmentform.php" target="blank"><button type="button" class="btn butn" >Appointment</button></a>
					</div>
				</div>
				<!-- people1 end -->

				
				
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact xxx">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>saturday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 mirpur , Dhaka, Bangkadesh</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> +880 1740 394222</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> 333333</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> aionbarman24@gmail.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
					
						<h3>leave us a message</h3>

						<form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
							<input class="name" type="text" name="name" placeholder="Name">
							<input class="email" type="email" name="email" placeholder="Email">
							<input class="phone" type="text" name="pnumber" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn bttn" type="submit" name="register" value="SUBMIT">

						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;ayon All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href="https://www.facebook.com/sazolborman222/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/sazolborman"><i class="fa fa-twitter"></i></a>
					<a href="aionbarman24@gmail.com"><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>