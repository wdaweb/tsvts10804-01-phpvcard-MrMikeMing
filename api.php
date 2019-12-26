<?php
//print_r($_FILES);
//先處理圖片存放
copy($_FILES['png']['tmp_name'],"img/".$_FILES['png']['name']);
//把所有資料做一個陣列塞到到SESSION去
$tmp=$_POST;
$tmp['png']=$_FILES['png']['name'];
session_start();
$_SESSION['info']=$tmp;
// print_r($_SESSION);
//轉址到preview.php去
header('location:preview.php');
?>