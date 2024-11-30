<?php
include "connectService.php";
$id=$_GET['id'];
$tenHo=$_GET["Ho"];
$tenGoi=$_GET["Ten"];
$email = filter_var($_GET['Email'],FILTER_SANITIZE_EMAIL);
$NgaySinh=$_GET['birth-day'];
$ThangSinh=$_GET['birth-month'];
$NamSinh=$_GET['birth-year'];
$GioiTinh = $_GET['gender'];
$NoiSong = $_GET['NoiSong'];
$MaNhanVien=$_GET['MaNhanVien'];
$sql1 = "SELECT * FROM yahoo where MaNhanVien = $MaNhanVien";
$sql2 = "SELECT * FROM yahoo where Email = '$email'";
$result1 = mysqLi_query($conn,$sql1);
$result2 = mysqLi_query($conn,$sql2);
if(
    $result1->num_rows <= 0 &&
    $result2->num_rows <= 0 &&
   filter_var($_GET['Ho'],FILTER_SANITIZE_STRING) &&
   filter_var($_GET['Ten'],FILTER_SANITIZE_STRING) &&
   filter_var($_GET['Email'],FILTER_VALIDATE_EMAIL) &&
   filter_var($_GET['MaNhanVien'],FILTER_VALIDATE_INT)){
$sql = " UPDATE `yahoo` 
         SET `Ho`='$tenHo',`Ten`='$tenGoi',`NgaySinh`='$NgaySinh',`ThangSinh`='$ThangSinh'
         ,`NamSinh`='$NamSinh',`GioiTinh`='$GioiTinh',`NoiSong`='$NoiSong',`MaNhanVien`='$MaNhanVien'
         ,`Email`='$email'
         WHERE id = $id"; 
mysqLi_query($conn,$sql);
header("location:../CRUD.php");
}else{
    echo "haha";
}
?>