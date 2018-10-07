<?php

///////
//check for duplicates,

require_once ("./connect/connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$acctype = $_POST['acc_type'];

$stmt = $con->prepare("INSERT INTO users (username, pass, acc_type) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $username, $password, $acctype);
$stmt->execute();

?>