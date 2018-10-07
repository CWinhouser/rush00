<?php
//session_destroy();
session_start();
/*if (!isset($_SESSION['username']))
{
    $_SESSION['acc_type'] = 9;
    $_SESSION['username'] = "Guest";
}*/
   // if (!(isset($_SESSION)))
   // {
        ///remember to do cart things...
        //session_start();
       // $_SESSION['acc_type'] = 9;
      //  $_SESSION['username'] = "Guest";
    //}
////guest admin checking etc
//function to check if logged in
if (empty($_SESSION))
{
    $_SESSION['acc_type'] = 9;
    $_SESSION['username'] = "Guest";
}
//var_dump($_SESSION);
function page_auth()
{
    if (isset($_GET['authf']) && $_GET['authf'] == 1)
    {
        echo "Incorrect credentials/user does not exist";
    }   
}

function load_products()
{
    echo "we are  not live once again";
    global $con;
    
   // $stmt = $con->prepare("SELECT * FROM products");
    $sql = "SELECT * FROM products";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    printf ("biyaaatch %s (%s)\n",$row["title"],$row["description"]);
   // echo "\nGODDAMN2\n";
   // $stmt->bind_result($title);
    //echo "\nGODDAMN3\n";
   // $stmt->execute();
    
  /*   while ($stmt->fetch())
    {
        echo "<td>";

        echo   $title."<br>".$description;

        echo "</td>";
    }
 */
}
function checklog()
{
        echo "Welcome ".$_SESSION['username']."<br>login/<a href='registration.php'>Register</a>";    
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
<h1> WELCOME </h1>
<br>
<p><?php  checklog(); ?></p>
<br>
<form action="login.php" method="post">
    username:<input type="text" name="login" required>
    <br>
    password:<input type="text" name="pass" required>
    <br>
    <input type="submit">
</form>
<br>
<p><?php page_auth(); ?></p>

<div class="products">
    <p>table of products here</p>
    <table>
        <tr>
            <?php  
            global $con;
            $sql = "SELECT * FROM products";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result);
            printf ("sdf %s (%s)\n",$row["title"],$row["description"]);

            ?>
        </tr>
    </table>


</div>

</body>
</html>