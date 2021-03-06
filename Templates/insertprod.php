<?php
session_start();

require_once ("./connect/connect.php");

$title = $_POST['title'];
$descr = $_POST['description'];
$img = $_POST['fileToUpload'];
$units = $_POST['units'];
$gender = $_POST['gender'];
echo $img."\n";
///check for duplicate image names
$target_dir = "images/uploads/";
$target_file = $target_dir . basename($_FILES[$img]["name"]);
echo "\n\n\nTARGET FILE:".$target_file."\n";
echo "Heres the target:".$target_file."\n";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    echo "Im trying something here: ";
    var_dump($_FILES);
    $check = getimagesize($_FILES[$img]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES[$img]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES[$img]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

//$stmt = $con->prepare("INSERT INTO products (title, description, image, units, gender) VALUES (?, ?, ?, ?, ?)");
//$stmt->bind_param("sssis", $title, $descr, $img, $units, $gender);
//$stmt->execute();


?>