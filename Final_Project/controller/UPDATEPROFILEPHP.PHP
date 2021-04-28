<?php  
require_once '../model/model.php';


if (isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	$data['Password'] = $_POST['Password'];
	$data['Username'] = $_POST['Username'];
	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;
	//$data['image'] = basename($_FILES["image"]["name"]);

	//$target_dir = "../uploads/";
	//$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateData2($_SESSION['id'], $data)) {
  	$msg = 'Successfully updated!!';
  	//redirect to showStudent
  	//header('Location: ../showStudent.php?id=' . $_POST["id"]);
  }
 else {
	$msg =  'You are not allowed to access this page.';
}
}

?>
