<?php
require_once ('../model/model.php');
function fetchUser($id){
	return showUser($id);

}
$oneuser = fetchUser();
if($user['id']){
$data = showUser($_POST['id']);

    $id = $data["ID"];
    $name = $data["name"];
    $email = $data["email"];
    $username = $data["username"];
    $gender = $data["gender"];
    $dob = $data["dob"];
}
?>