<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["phone"]))  
      {  
           $error = "<label class='text-danger'>Enter Phone</label>";  
      }  
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'phone'     =>     $_POST["phone"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Thank You</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include '../Controller/CSS2.php';?>
</head>
<body>


<header>





</header>

<section>
    <nav>
       <h2>Home</h2>
    <ul>
      <li><a href="welcome.php">Home</a></li>

    </ul>
  </nav>
  <article>

           <div class="container" style="width:500px;">  
                <h3 align="">Contact with us</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
 
                     <label >Name:</label>
                     <input type="text" name="name"> <br>

                     <label >Email:</label> 
                     <input type="text"  name="email"> <br>

                     <label >Phone:</label>
                     <input type="text" name="phone">



                     <br><br>

                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br /> 

                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br /> 

  </article>
</section>

<?php include '../controller/FOOTER.php';?>

</body>
</html>