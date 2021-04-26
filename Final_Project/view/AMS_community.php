<html>
  <head>
    <title>Community</title>
    <style>
.error {color: #FF0000;}
</style>
</head>
  <body>
    <script src="../js/validate.js"></script>
<?php
	require("../view/AMS_header2.php");
  include("../controller/community_control.php")
?>
<center>
    <fieldset>
    <img src="../image/cover_aiub.jpg" alt="Aiub" width="600" height="200">
    <h1>Welcome to AIUB Alumni Community </h1><br><br>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<?php   
  if(isset($error))  
  {  
    echo $error;  
  }  
?>
<table align="center" >  
<tr>
  <td>Post</td>
  <td>:</td> 
  <td><textarea name="poststat" rows="4" cols="50" id="poststat" onkeyup="emptyPost()" value="poststat" placeholder="Type something"></textarea></td>
  <td><span class="error" id="poststatErr">* <?php echo $poststatErr;?></span></td>
</tr>
<tr>
  <td align="right" colspan="6"><input type="submit" name="submit" value="Submit"></td>
</tr>
  <?php  
        if(isset($message))  
          {  
            echo $message;  
          }  
    ?> 
</table>
</form>
<h5><span class='label label-danger'>Recent Post:</span> </h5><br>
<?php
    include("../controller/community_post.php")
?>
    </fieldset>
</center>
</body>
</html>
<?php
    require("../view/AMS_footer.php")
?>