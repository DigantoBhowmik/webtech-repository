<?php

require_once '../model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['name']);
    	require_once '../searchalluser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
