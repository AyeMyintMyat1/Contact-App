<?php 
require_once "core/base.php";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uploadName = $_POST['uploadName'];
$uploadType = $_POST['uploadType'];
$images = ["image/jpg","image/jpeg"];
if(in_array($uploadType,$images))
{
$photo = "images/".$uploadName;
$sql = "UPDATE contacts SET name = '$name',email = '$email',phone = '$phone',photo = '$photo' WHERE id = $id";
$con = conn();
if(mysqli_query($con,$sql)){
 echo "success";
}else{
die(mysqli_error($con));
}
}
?>