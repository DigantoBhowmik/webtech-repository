<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>

<form action="../controller/add.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="sprice">Selling Price:</label><br>
  <input type="text" id="sprice" name="sprice"><br>
  <label for="bprice">Buying Price:</label><br>
  <input type="text" id="bprice" name="bprice"><br>
  <br>
  <input type="submit" name = "add" value="Save">
  
</form> 

</body>
</html>