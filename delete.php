<?php 

require_once "core/base.php";
$id = $_GET['id'];
$sql = "DELETE FROM contacts WHERE id = $id";
if(mysqli_query(conn(),$sql)){
echo "success";
}
?>