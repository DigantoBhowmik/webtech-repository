<?php require_once '../model/model.php'; 

    if(isset($_POST['submit'])  && isset($_SESSION['name']))
    {
        $data['name'] = $_POST['name'];
	    
	    $data['username'] = $_POST['username'];
    
    if (updateData($_SESSION['id'], $data)) {
        echo 'Successfully updated!!';
       
        
    }
   else {
      echo 'You are not allowed to access this page.';
  }
}
?>