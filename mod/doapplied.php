<?php 
include("connect.php");
session_start();

$UserId = $_SESSION['UserId'];
$ScholarshipId = $_POST['sid'];

$result1 = executeQuery("select * from msscholarship where ScholarshipId = '".$ScholarshipId."'");
$row = mysql_fetch_array($result1);


require_once '../plugins/PHPMailer-master/PHPMailerAutoload.php';

$emailTo = $row['SEmail'];

		$bodytext = "Berikut lampiran data excel bencana";

		$email = new PHPMailer();
		
		

		$email->From      = $_SESSION['Email'];
		$email->FromName  = $_SESSION['Name'];
		$email->Subject   = 'Applied Scholarship';
		$email->Body      = 'ana;sdna;oiwkdnapwodmldwjnakndakjdna';
		$email->AddAddress($emailTo);

		if (!$email->Send())
		{
		    echo "Mailer error: " . $email->ErrorInfo;
		}
		else{
			echo "Sukses";
		}
	

	$result2 = executeQuery("insert into trscholarship (ScholarshipId,UserId) values ('".$ScholarshipId."','".$UserId."')");

	$msg ='Scholarship successfully applied';

	header("Location:../myscholarships.php?msg=$msg");


 ?>