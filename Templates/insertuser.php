<?php
session_start();
///////
//check for duplicates,

require_once ("./../connect/connect.php");

echo $username = $_POST['username'];
echo $password = $_POST['password'];
echo $acctype = 0;

$stmt = $con->prepare("INSERT INTO users (username, pass, acc_type) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $username, $password, $acctype);
$stmt->execute();

?>