 <?php
	session_start();
	require_once '../Model/model.php';

	if(isset($_POST['Username']))
	{
		$data = searchUser2($_POST['Username']);
		if($data!=null)
		{
			$uname= $data["Username"];
			$pass = $data["Password"];
			$id = $data["ID"];

			if($_POST['Username']==$uname && $_POST['Password']==$pass)
			{
				$_SESSION['uname'] = $uname;
				$_SESSION['id'] = $id;
		header("location: ../View/DASHBOARDAL.php");
			}
	
		}

		    if($_POST['Username']==null  && $_POST['Password']==null)
    {
        $msg="Enter User Name & Password";
    }
    elseif($_POST['Username']==null)
    {
        $msg="Enter User Name";
    }
    elseif($_POST['Password']==null)
    {
        $msg="Enter Password";
    }
    else
    {
		$msg="username or password invalid";
		
	}
    


}
	
