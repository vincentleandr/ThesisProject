<?php
include("connect.php");
session_start();
$UserId = $_SESSION['UserId'];
$Author = $_SESSION['Firstname'];
$Comment = $_POST['Comment'];
$BlogId = $_POST['BlogId'];
$Date = date('Y-m-d H:i:s');

$result1 = executeQuery("insert into commentblog (UserId,BlogId,Comment,Author,Date) values('".$UserId."','".$BlogId."','".$Comment."','".$Author."','".$Date."') ");





	header("Location:../blog-details.php?ComblogId=$BlogId");



?>