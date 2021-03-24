<?php  
require_once '../model/model.php';


if (isset($_POST['updateproduct'])) {
	$data['name'] = $_POST['name'];
	$data['sprice'] = $_POST['sprice'];
	$data['bprice'] = $_POST['bprice'];
	
	

	


  if (updateproduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	
  	header('Location: ../showproduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>