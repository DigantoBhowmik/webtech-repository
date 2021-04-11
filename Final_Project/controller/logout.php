<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:../view/login.php");
	
}

else{
	header("location:../view/login.php");
}

?>