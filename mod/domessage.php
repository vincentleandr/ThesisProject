<?php 
include("connect.php");
session_start();

$UserId = $_SESSION['UserId'];
$revid = $_POST['UniversityId'];

$result1 = executeQuery("select * from msuniversity where UniversityId='".$revid."'");
$row = mysql_fetch_array($result1);


require_once '../plugins/PHPMailer-master/PHPMailerAutoload.php';

$emailTo = $row['UEmail'];

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

	header("Location:../university-details.php?revid=$revid");


 ?>