<?php
session_start();
var_dump($_SESSION["username"]);
session_destroy();
var_dump($_SESSION["username"]);

//unset($_SESSION);
?>