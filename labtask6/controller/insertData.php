<?php  
require_once '../model/model.php';


if (isset($_POST['createUser'])) {
	$data['name'] = $_POST['name'];
	
	$data['username'] = $_POST['username'];
  $data['password'] = $_POST['password'];
	

	

  if (addUser($data)) {
  	echo 'Successfully added!!';
    echo "<a href ='../view/login.php'>Login</a>";
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>