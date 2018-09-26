<?php

$pId = $_GET['city'];
$link = mysqli_connect('127.0.0.1','root','root','user');
$sql = "select *from ch_region where REGION_ID = '$pId'";
$res = mysqli_query($link,$sql);
$arr = mysqli_fetch_all($res,1);
mysqli_close($link);

// var_dump($arr);

echo json_encode($arr);
?>