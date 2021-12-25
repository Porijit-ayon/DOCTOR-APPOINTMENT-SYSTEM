<?php 
session_start();

if(isset($_SESSION['auth']) || isset($_COOKIE['auther'])){

		session_destroy();
		if (isset($_COOKIE['auther'])) {
			setcookie('auther', '', time()-(60*60*24), '/');
		}
		header("location:login.php");
	
}else{
	header("location:login.php");
}




 ?>