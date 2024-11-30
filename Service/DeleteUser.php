<?php
include "connectService.php";
$sql = 'SELECT * FROM yahoo';
$id=$_GET['id'];
$sql = "DELETE FROM `yahoo` WHERE id = $id;";
echo $id;
mysqLi_query($conn,$sql);
header("location:../CRUD.php");

?>
