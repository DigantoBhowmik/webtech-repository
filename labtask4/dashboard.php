<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<?php 


session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Logged in as ".$_SESSION['uname']."</h2>";
	
	echo "<a href='logout.php'>Logout</a>";
    

}
else{
		$msg="error";
		header("location:login.php");
		
	}

 ?>

<a href="dashboard.php">Dashboard</a>
<a href="viewprofile.php">viewprofile</a>
<a href="edit.php">Edit Profile</a>
<a href="changephoto.php">Change Profile Picture</a>
<a href="changepassword.php">Change Password</a>
<a href="logout.php">Log out</a>


</body>
</html>