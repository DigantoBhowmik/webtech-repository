<?php 
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {
           if(file_exists('../controller/post.json'))  
            {  
                    $current_data = file_get_contents('../controller/post.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                        'view_post'               =>     $_POST['view_post']
                    );  
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);  
                    if(file_put_contents('../controller/post.json', $final_data))  
                    {  
                        $message = "<label class='text-success'>File Appended Success fully</p>";  
                    }  
            }  
           else  
            {  
                    $error = 'JSON File not exits';  
            }
 }
            

?>