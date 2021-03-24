<?php  
require_once '../model/model.php';


if (isset($_POST['add'])) {
	$data['name'] = $_POST['name'];
	$data['sprice'] = $_POST['sprice'];
	$data['bprice'] = $_POST['bprice'];
	

	
  if (addStudent($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>