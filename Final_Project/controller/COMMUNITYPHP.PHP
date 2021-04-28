<?php

 $message = '';  
 $error = ''; 
$postErr  = "";
$posts  = "";



   if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["posts"])) {
    $postErr = "post is required";
  } else {
    $posts = test_input($_POST["posts"]);
  }





           if(file_exists('../view/post.json'))  
           {  
                $current_data = file_get_contents('../view/post.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'posts'               =>     $_POST['posts'],  
      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../view/post.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
         }




}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>