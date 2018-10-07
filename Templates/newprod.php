<?php

///////
//check for duplicates,



require_once ("connect.php");
///change to product details
$username = $_POST['username'];
$password = $_POST['password'];
$img = $_POST['acc_type'];
$acctype = $_POST['acc_type'];

$stmt = $con->prepare("INSERT INTO products (title, description, image, units) VALUES (?, ?, ?)");
$stmt->bind_param("sssi", $username, $password, $acctype);

$stmt->execute();

?>