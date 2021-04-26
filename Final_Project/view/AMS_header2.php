<?php
session_start();
?>
<html>
  <head>
    <style>
.error {color: #FF0000;}
</style>
</head>
  <body style="background-color:">
    <fieldset>
    	<a href="../view/AMS_dashboard.php" style="text-align: center;"><h1>ALUMNI Management System</h1></a>
    	<p style="text-align:right"><span>Logged in as</span>
    	<a href='../view/AMS_viewprofile.php'><?php echo $_SESSION['uname']?></a><span>|</span>
    	<a href='../controller/AMS_logout.php'> logout </a>
    </p>
    </fieldset>
</body>
</html>

<?php
require ("../view/AMS_menubar.php");
?>