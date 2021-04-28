<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:../view/LOGINal.php");
	
}

else{
	header("location:../view/LOGINal.php");
}

?>