<?php  
include("connect.php");

$value = $_GET['namedelete'];


$result1 = executeQuery("delete from msscholarship where ScholarshipId = $value");

$msg ='Scholarship succesfully deleted';

header("Location:../admin-scholarships.php?msg=$msg");

?>