<?php 
require_once "core/base.php";
$dataType = ["image/jpeg","image/jpg"];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uploadName = $_POST['uploadName'];
$uploadType = $_POST['uploadType'];
$con =conn();
if(in_array($uploadType,$dataType)){
 $photo = "images/$uploadName";
$sql = "INSERT INTO contacts(name,phone,photo,email) VALUES('$name','$phone','$photo','$email')";
if(mysqli_query($con,$sql)){
 echo "success";
}else{
 die("Error :".mysqli_error($con));
}
}
// print_r($_POST);
?>