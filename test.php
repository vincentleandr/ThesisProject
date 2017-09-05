<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  


// $firstname = $_POST['Firstname'];
// $lastname = $_POST['Lastname'];
// $dob = $_POST['DOB'];
// $phone = $_POST['Phone'];
// $email = $_POST['Email'];
// $password = $_POST['Password'];
// $gender = $_POST['Gender'];
 // $race = $_POST['Race'];
// $currentlocation = $_POST['Currentlocation'];
// $citizen = $_POST['Citizen'];
// $gpa = $_POST['GPA'];
// $grade = $_POST['Grade'];

// echo "$firstname"; 
// echo "$lastname";
// echo "$dob";
// echo "$phone";
// echo "$email";
// echo "$password";
// echo "$gender";
// echo "$race";
// echo "$currentlocation";
// echo "$citizen";
// echo "$gpa";
// echo "$grade";

 if(isset($_POST['Race']))
 {
 	 foreach ($_POST['Race'] as $_RaceValue)
 	 {
 	 	echo "Race #{$_RaceValue} was selected!\n";
 	 }

 }

 


?>

</body>
</html>