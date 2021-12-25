<?php 
session_start();

$kumar = "";
$sazol = "";

if (isset($_POST['login'])) {
	
	$email = $_POST['email'];  
    $password = $_POST['password']; 
    $login = isset($_POST['login'])?1:0;


    if ($email == "ayon@gmail.com" && $password == "123") {
    	$_SESSION['aoth']=1; 
    	header("location:index.php");
    }else{

    	$sazol= "wrong password or email";
    }
}




 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin_Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	


	<style>
		body{
			background-image: url('../img/admin.jpg');
			background-repeat: no-repeat;
			width: 100%;
			background-size: 100%;
			background-position: center top;
		}

		.login-box{

		max-width: 700px;
		margin: 175px auto;

		float: none;
		margin-left: 302px;


		}

		.pp{
			color: green;
		}

		.xxx{
			color: red;
			font-size: 20px;
		}



	</style>
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6">
				<h2 class="xxx"><?php echo $sazol; ?></h2>
				<h2>Login Here</h2>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<div class="form-group">
						<label>Email</label>
						<input type="text" id="email" name="email" class="form-control" required placeholder="Email">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" id="password" name="password" class="form-control" required placeholder="password" >
					</div>

					<button type="submit" class="btn btn-primary" name="login">Login</button>
					
				</form>
			</div>
		</div>
		</div>
	</div>
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
