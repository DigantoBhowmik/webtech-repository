<?php
$host="localhost";
$username="root";
$password="";
$database="finalproject";
$connection=mysqli_connect($host,$username,$password,$database);
if(!$connection){
	echo "Connection Error";
}
?>