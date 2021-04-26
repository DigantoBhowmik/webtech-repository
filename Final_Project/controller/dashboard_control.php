<?php
require '../model/model.php';
if (isset($_SESSION['uname'])) {
	echo "<h1><fieldset>Welcome ".$_SESSION['uname']."</h1></fieldset>";
}
else{
	$msg="error";
		header("location:AMS_login.php");
}
?>