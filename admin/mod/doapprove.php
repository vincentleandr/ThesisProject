<?php
include("connect.php");

$UserId = $_GET['UserId'];
$applicantid=$_GET['applicantid'];


$result1 = executeQuery("update trscholarship set Status = 'Approved' where UserId='".$UserId."' and ScholarshipId = '".$applicantid."'");


header("Location:../admin-scholarships-applicants.php?applicantid=$applicantid");

?>