<html>
<title>View Profile</title>
<body>
<center>
<?php
	require("../view/AMS_header2.php");
	include("../controller/view_control.php");
	
?>
<fieldset>
<legend>View Profile</legend>
  <p>Name        :   <?php echo $name ?></p>
  <p>Username        :   <?php echo $username ?></p>
  <p>Email        :   <?php echo $email ?></p>
  <p>Gender        :   <?php echo $gender ?></p>
  <p>Date of Birthday      :   <?php echo $dob ?></p>
</fieldset>
<?php
    require("../view/AMS_footer.php")
?>
</center>
</body>
</html>