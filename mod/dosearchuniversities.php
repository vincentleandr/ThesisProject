<?php

$UCountry = $_POST['UCountry'];
$UMajor = $_POST['UMajor'];

if(!empty($UCountry) & !empty($UMajor)){
	header("Location:../universities.php?UCountry=$UCountry&UMajor=$UMajor");

}elseif(!empty($UCountry) & empty($UMajor)){
header("Location:../universities.php?UCountry=$UCountry");
}elseif(empty($UCountry) & !empty($UMajor)){
header("Location:../universities.php?UMajor=$UMajor");
}else{
	header("Location:../universities.php");
}

?>