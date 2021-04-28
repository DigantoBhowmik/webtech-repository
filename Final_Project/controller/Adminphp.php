<?php

 require_once '../Model/dbconnect.php';
$conn = db_conn();


$sql = "SELECT ID , Name , Username , Email, Gender, Company, UserType FROM userinfo WHERE id = ?";

$stmt = $conn->prepare($sql);
//$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $uname, $email, $gender, $company, $user);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $id . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $name . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $uname . "</td>";
echo "<th>Address</th>";
echo "<td>" . $email . "</td>";
echo "<th>City</th>";
echo "<td>" . $gender . "</td>";
echo "<th>PostalCode</th>";
echo "<td>" . $company . "</td>";
echo "<th>Country</th>";
echo "<td>" . $user . "</td>";
echo "</tr>";
echo "</table>";
?>