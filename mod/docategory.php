<?php 

$category = $_GET['category'];

if($category == "Information"){
	header('Location:../blog.php?category=Information');

}elseif($category == "Inspiration"){
header('Location:../blog.php?category=Inspiration');
}elseif ($category == "News") {
	header('Location:../blog.php?category=News');
}else{
header('Location:../blog.php?category=Tips');
}


 ?>