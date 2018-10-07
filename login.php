<?php
session_start();
///////
//var_dump($_SESSION);
//check for duplicates,



require_once ("./connect/connect.php");

$username = $_POST['login'];
$password = $_POST['pass'];

$stmt = $con->prepare("SELECT username,pass,acc_type FROM users WHERE username=? AND pass=?");
$stmt->bind_param("ss", $username, $password);
$stmt->bind_result($us,$pa,$ac);
$stmt->execute();
$res = $stmt->fetch();
if (!empty($res))
{
    /////////do the cart switcheroo

   // echo $us." ".$pa." ".$ac."\n";
    //session_destroy();
 //   unset($_SESSION['username']);
 //   unset($_SESSION['acc_type']);
  //  session_start();

    //session_destroy();
    //$_SESSION = array();
    $_SESSION['username'] = $us;
    $_SESSION['acc_type'] = $ac;
    header('Location: home.php?authf=0');
}
else
{
   header('Location: home.php?authf=1');
}
//var_dump($_SESSION);

?>