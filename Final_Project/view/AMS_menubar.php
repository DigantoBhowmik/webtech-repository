<?php
if (isset($_SESSION['uname'])) {
}
else{
    $msg="error";
        header("location:../view/AMS_login.php");
}
?>
<html>
  <head>
    <style>
.error {color: #FF0000;}
</style>
</head>
  <body>
    <center>
    <fieldset>
    	<p><h4><u>Account</u></h4>
    	<a href='../view/AMS_dashboard.php'> Home </a><span>|</span>
        <a href='../view/AMS_viewprofile.php'> View Profile </a><span>|</span>
        <a href='../view/AMS_editprofile.php'> Edit Profile </a><span>|</span>
        <a href='../view/AMS_community.php'> Community </a><span>|</span>
        <a href='../view/AMS_memberlist.php'> Members </a> 
    </p>
    </fieldset>
</center>
</form>
</center>
</body>
</html>