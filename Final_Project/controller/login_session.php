<?php
session_start();
include '../model/model.php';
//$data = searchUser($_POST['username']);
require_once '../model/model.php';

	if(isset($_POST['username']))
	{
		$data = searchUser1($_POST['username']);
		if($data!=null)
		{
			$uname= $data["username"];
			$pass = $data["password"];
			$id = $data["ID"];

			if($_POST['username']==$uname && $_POST['password']==$pass)
			{
				$_SESSION['uname'] = $uname;
				$_SESSION['id'] = $id;
				header("location:../view/AMS_dashboard.php");
			}
			else
			{
				echo "<script>alert('Username or Password incorrect!')</script>";
			}
		}
	}

?>