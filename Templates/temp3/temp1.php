<!DOCTYPE html>
<html lang="en">
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