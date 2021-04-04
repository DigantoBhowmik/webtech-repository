<?php
	session_start();
	require_once '../model/model.php';

	if(isset($_POST['Username']))
	{
		$data = searchUser($_POST['Username']);
		if($data!=null)
		{
			$uname= $data["Username"];
			$pass = $data["Password"];
			$id = $data["ID"];

			if($_POST['Username']==$uname && $_POST['Password']==$pass)
			{
				$_SESSION['uname'] = $uname;
				$_SESSION['id'] = $id;
				header("location:../view/viewprofile.php");
			}
			else
			{
				echo "<script>alert('Username or Password incorrect!')</script>";
			}
		}
	}
?>







