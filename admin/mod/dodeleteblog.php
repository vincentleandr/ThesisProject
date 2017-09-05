<?php  
include("connect.php");

$value = $_GET['namedelete'];


$result1 = executeQuery("delete from msblog where BlogId = $value");

$msg ='Blog succesfully deleted';

header("Location:../admin-blog.php?msg=$msg");

?>