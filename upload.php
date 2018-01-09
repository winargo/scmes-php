<?php
session_start();
include('db_connect.php');
$reportid="ER".(rand(00000000,99999999));
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $dir= basename( $_FILES["fileToUpload"]["name"]);
        $temp=$target_dir.$dir;
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $sql = "INSERT INTO emergencyreport (caller,emergencyid,hp,keterangan,imagedir,location) VALUES('".$_POST['caller']."','$reportid','".$_POST['hp']."','".$_POST['keterangan']."','$temp','".$_POST['address']."')";
            if(mysqli_query($conn, $sql)){
                header("Location: home.php");
                exit;
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        
        // Close connection
        mysqli_close($link);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>