
<?php 

	session_start();

	if(isset($_SESSION['auth'])){

	if($_SESSION['auth']==1){
		
		header("location:index.php");
		
		header("location:appointmentform.php");
		header("location:appointmentform1.php");
		header("location:appointment.php");
		header("location:logout.php");

	}
	
}else{

		if (isset($_COOKIE['auther'])) {
		if ($_COOKIE['auther']==true) {
			header("location:index.php");
			
		}
}
}

    include "lip/connection.php";

    $sazol = NULL;
	$kumar = NULL;

    
    if( isset($_POST['login'])){

     $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from web where email = '$username' and password = '$password'";  
        
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 

           $_SESSION['auth']=1;
           if (isset($_POST['login'])==1) {
            	setcookie('auther', true, time()+(60*60*24), '/');
            } 
           header('location:index.php'); 
           
        }  
        else{  

            $kumar = "email or password worng";
        }     


}



 ?> 




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body{
			background-image: url('img/login_img.jpg');
			background-repeat: no-repeat;
			width: 100%;
			background-size: 100%;
			background-position: center top;
		}

		.login-box{

		max-width: 700px;
		margin: 175px auto;

		float: none;
		margin-left: 550px;


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
				<h2 class="xxx"><?php echo $kumar; ?></h2>
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
					<p class="message">Not registered? <a href="registration.php" class="pp">Create an account</a></p>
				</form>
			</div>
		</div>
		</div>
	</div>
	
</body>
</html>