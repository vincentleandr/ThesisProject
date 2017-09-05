<?php  
include("connect.php");

$BlogId = $_REQUEST['name'];
$BTitle = $_POST['BTitle'];
$_BTitle = mysql_real_escape_string($BTitle);
$BCategory = $_POST['BCategory'];
$BContent = $_POST['BContent'];
$_BContent = mysql_real_escape_string($BContent);
$BAuthor =$_POST['BAuthor'];
$Date = date('Y-m-d H:i:s');

$BImage = $_FILES['BImage']['name'];
$tmp_name_image = $_FILES["BImage"]["tmp_name"];
$type_image = $_FILES["BImage"]["type"];
$filepathimage = "../../images/blog/".$BImage;
move_uploaded_file($tmp_name_image, $filepathimage);

$result1 = executeQuery("update msblog set BTitle='".$_BTitle."',BCategory='".$BCategory."',BContent='".$_BContent."',BAuthor='".$BAuthor."',Date='".$Date."' where BlogId ='".$BlogId."'");

$msg ='Blog succesfully updated';

header("Location:../admin-blog.php?msg=$msg");


?>