<?php  
include("connect.php");

$value = $_GET['namedelete'];


$result1 = executeQuery("delete from msuniversity where UniversityId = $value");

$msg ='University succesfully deleted';

header("Location:../admin-universities.php?msg=$msg");

?>