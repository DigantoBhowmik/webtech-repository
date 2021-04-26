<?php
$username=$_SESSION['uname'];
$poststat="";
$poststatErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["poststat"])) {
    $poststatErr = "Empty Post";
  } else {
    $poststat = $_POST["poststat"];
  }
  if(isset($_POST["submit"])) {
    if(empty($_POST["poststat"]))  
      {  
           $error = "<label class='text-danger'>Type Something</label>";  
      }
      else  
      {  
        if(file_exists('../controller/aiub_com.json'))  
          {  
            $current_data = file_get_contents('../controller/aiub_com.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array( 
                           'poststat'               =>     $_POST['poststat'],  
                      );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('../controller/aiub_com.json', $final_data))  
            {  
              $message = "Post Successful !!";  
            }  
          }  
          else  
              {  
                $error = '';  
              }
  }
}

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
?>