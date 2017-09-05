<?php 
include("connect.php");
session_start();

$ScholarshipId = $_POST['scid'];
$UserId = $_SESSION['UserId'];

$result1 = executeQuery("delete from trscholarship where UserId = '".$UserId."' and ScholarshipId = '".$ScholarshipId."'");

$msg ='Scholarship successfully removed';

header("Location:../dashboard.php?msg=$msg");

 ?>