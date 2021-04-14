<?php require_once '../model/model.php'; 

    if(isset($_POST['submit']))
    {
        $data['name'] = $_POST['name'];
	    $data['email'] = $_POST['email'];
	    $data['username'] = $_POST['username'];
        $data['gender'] = $_POST['gender'];
        $data['dob'] = $_POST['dob'];
    
    if (updateData($_SESSION['id'], $data)) {
        $msg = 'Successfully updated!!';
       
        
    }
   else {
     $msg = 'You are not allowed to access this page.';
  }
}
?>