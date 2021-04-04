<?php 

session_start();
$dtls = file_get_contents('../controller/data.json');
    $dtlsok = json_decode($dtls);

    foreach($dtlsok as $ok)
    {
        $username=$ok->username;
        $password=$ok->password;
    }


if (isset($_POST['uname'])) {
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;
		header("location:../view/dashboard.php");
	}
	else{
		$msg="username or password invalid";
		
	}

}

 ?>