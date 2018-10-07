<!DOCTYPE html>
<html lang="en">
    <head>
<style>
div.categories{
    position: absolute;
    right: 80%;
    width: 300px;
    height: 200px;
    border: 3px solid green;
}
div.parent {
    position: sticky;
    text-align: center;
    top: auto;
    width: 1500px;
    margin-left: auto;
    height: 900px;
    border: 3px solid #8AC007;
}

.box1{
    position: absolute;
    width: 250px;
    height: 250px;
    display: block;
    border: 2px solid black;
}

.boxtext{
    position: relative;
    top: 85%;
    align-items: center;
    border: solid 1px red;
}

.box1:hover{
    position: absolute;
    height: 300px;
    display: block;
    border: 2px soild rgb(255, 0, 0);
}

.box2{
    position: absolute;
    left: 300px;
    width: 250px;
    height: 250px;
    display: block;
    border: 2px solid black;
}

.boxtext{
    position: relative;
    top: 85%;
    align-items: center;
    border: solid 1px red;
}

.box2:hover{
    position: absolute;
    height: 300px;
    display: block;
    border: 2px soild rgb(255, 0, 0);
}

div.absolute {
    position: absolute;
    right: 25%;
    left: 25%;
    bottom: 10px;
    border: 3px solid rgb(7, 10, 192);
} 

.center {
    text-align: center;
}

.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active{
    background-color: rgba(33, 33, 94, 0.541);
}

.pagination a:hover:not(.active) {background-color: rgb(17, 13, 228);}
</style>
</head>
<body>
<?php

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'products');

$results_per_page = 2;

$sql = "SELECT * FROM products WHERE gender = 'M'";
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

$number_of_pages = ceil($number_of_results / $results_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
}
else {
    $page = $_GET['page'];
}

$page_first = ($page - 1) * $results_per_page;

$sql = "SELECT * FROM products LIMIT " . $page_first . ',' . $results_per_page;
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)){
    echo $row['prod_id'] . ' ' . $row['description'] .'<br>';
}

for ($page=1; $page<=$number_of_pages; $page++) {
    echo '<a href="temp1.php?page=' . $page . '">' . $page . '</a> ';
}

?>
</body>
</html>