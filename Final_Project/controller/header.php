<?php 


session_start();

if (isset($_SESSION['uname'])) {
	echo "<h2> Logged in as ".$_SESSION['uname']."</h2>";
	
	echo "<a href='../controller/logout.php'>Logout</a>";
    

}
else{
		$msg="error";
		header("location:../view/login.php");
		
	}

 ?>