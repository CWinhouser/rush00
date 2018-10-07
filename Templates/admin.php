<?php
session_start();
if ($_SESSION['acc_type'] != 1)
{
    header('Location: home.php?unauthacc=1');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div> <?php echo "Welcome, ".$_SESSION['username'];?></div>
    <br>
    <h1>ADD PRODUCTS<h1>
    <br>
    <div>
    <form name="addproform" action="insertprod.php" method="post">
        title: <input name="name" type="text" placeholder="Enter title">
        description: <input name="description" type="text" placeholder="Enter description">
       <!--  image:  <input type="text" placeholder="Upload image"> -->
        <br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <!-- <input type="submit" value="Upload Image" name="submit"> -->
        <br>
        units:  <input type="text" placeholder="Insert price">
        gender:  <select name="Gender"><option value="M">Male </option><option value="F">Female </option></select>
        <br><input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
</body>
</html>