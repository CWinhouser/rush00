<?php
session_start();
///////
//var_dump($_POST);
//check for duplicates,

require_once ("./../connect/connect.php");
//echo "connect";

$username = $_POST['login'];
$password = $_POST['pass'];



$stmt = $con->prepare("SELECT username,pass,acc_type,u_id,cart_code FROM users WHERE username=? AND pass=?");
$stmt->bind_param("ss", $username, $password);
$stmt->bind_result($us,$pa,$ac,$uid, $cc);
$stmt->execute();
$res = $stmt->fetch();
if (!empty($res))
{
    /////////do the cart switcheroo

    $_SESSION['u_id'] = $uid;
    $_SESSION['username'] = $us;
    $_SESSION['acc_type'] = $ac;
    $_SESSION['cart_code'] = $cc;
    if ($_SESSION['acc_type'] == 1)
    {
        header('Location: ./../../phpmyadmin');
    }
    else{
    header('Location: ./temp1/landing.php?authf=0');
    }
}
else
{
    header('Location: ./temp1/landing.php?authf=1');
}
//var_dump($_SESSION);

?>