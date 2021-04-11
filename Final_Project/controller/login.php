<?php 

session_start();

require_once '../model/model.php';

if (isset($_POST['uname'])) {
	$data = searchUser($_POST['uname']);
		if($data!=null)
		{
			$uname= $data["Username"];
			$pass = $data["Password"];
			$id = $data["ID"];

			if($_POST['uname']==$uname && $_POST['password']==$pass)
			{
				$_SESSION['uname'] = $uname;
				$_SESSION['id'] = $id;
				header("location:../view/dashboard.php");
			}
        }


    if($_POST['uname']==null  && $_POST['password']==null)
    {
        $msg="Enter User Name & Password";
    }
    elseif($_POST['uname']==null)
    {
        $msg="Enter User Name";
    }
    elseif($_POST['password']==null)
    {
        $msg="Enter Password";
    }
    else
    {
		$msg="username or password invalid";
		
	}
    


}

 ?>