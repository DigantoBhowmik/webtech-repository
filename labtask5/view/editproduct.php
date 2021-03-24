<?php 

require_once '../controller/productInfo.php';
$product = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateproduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="sprice">Selling Price:</label><br>
  <input value="<?php echo $product['sprice'] ?>" type="text" id="sprice" name="sprice"><br>
  <label for="bprice">Buying Price:</label><br>
  <input value="<?php echo $product['bprice'] ?>" type="text" id="bprice" name="bprice"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  
  <input type="submit" name = "updateproduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

