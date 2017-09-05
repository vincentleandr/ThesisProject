<?php

$searchkey = $_POST['searchkey'];
$searchtype = $_POST['searchtype'];
$applicantid = $_POST['applicantid'];

if($searchtype==1){

header("Location:../admin-scholarships.php?searchkey=$searchkey");
}elseif($searchtype==2){
	header("Location:../admin-universities.php?searchkey=$searchkey");
}elseif($searchtype==4){
	header("Location:../admin-scholarships-applicants.php?searchkey=$searchkey&applicantid=$applicantid");
}else{
	header("Location:../admin-blog.php?searchkey=$searchkey");
}
?>