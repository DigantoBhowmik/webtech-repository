<?php  
require_once '../controller/productInfo.php';

$product = fetchproduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Selling Price</th>
		<th>Buying Price</th>
		
	</tr>
	<tr>
		<td><a href="showproduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
		<td><?php echo $product['name'] ?></td>
		<td><?php echo $product['sprice'] ?></td>
		<td><?php echo $product['bprice'] ?></td>
		
	</tr>

</table>


</body>
</html>