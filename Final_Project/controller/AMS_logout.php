<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:../view/AMS_login.php");
	
}

else{
	header("location:../view/AMS_login.php");
}

 ?>