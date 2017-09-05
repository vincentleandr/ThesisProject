<?php 
include("connect.php");
$Email = $_POST['Email'];

$rand = substr(md5(microtime()),rand(0,26),5);

$randmd5 = md5($rand);

$result1 = executeQuery("update msuser set Password = '".$randmd5."' where Email = '".$Email."'");

require_once '../plugins/PHPMailer-master/PHPMailerAutoload.php';

$emailTo = $row['Email'];

		$bodytext = "Berikut lampiran data excel bencana";

		$email = new PHPMailer();
		
		

		$email->From      = $_SESSION['myscholaship@gmail.com'];
		$email->FromName  = $_SESSION['myscholaship'];
		$email->Subject   = 'Forgot password';
		$email->Body      = $rand;
		$email->AddAddress($emailTo);

		if (!$email->Send())
		{
		    echo "Mailer error: " . $email->ErrorInfo;
		}
		else{
			echo "Sukses";
		}

	$msg ='Password successfully sended';

	header("Location:../myscholarships.php?msg=$msg");


 ?>