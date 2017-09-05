<?php 
	include("connect.php");
	session_start();

	$Email =$_REQUEST['Email'];
	$Password = $_REQUEST['Password'];

	$Passwordmd5 = md5($Password);
	$BlogId = $_POST['BlogId'];



	$result1 = executeQuery("select UserId,Email,Role,Firstname,Password from msuser where Email='$Email' and Password = '$Passwordmd5'");

	
	if(!mysql_num_rows($result1))
	{
	header("Location:../login.php?msg=Incorrect Email or Password !");
	}
	else
	{
	//menyimpan cookie
	if(isset($_REQUEST['remember']))
	{
		$cookieTime = (3600 * 24 * 30);
		setcookie ("Email",$Email,time()+$cookieTime,"/");
		setcookie ("Password",$Password,time()+$cookieTime,"/");
	}		
	
	//memyimpan sesi
	$row = mysql_fetch_array($result1);	
	$_SESSION['UserId'] = $row[0];	
	$_SESSION['Email'] = $row[1];
	$_SESSION['Role'] = $row[2];
	$_SESSION['Firstname'] = $row[3];
	// $_SESSION['Grade']
	// $_SESSION['Grade']
	// $_SESSION['Grade']

	// $result2 = executeQuery("select * from userace where UserId='".$row[0]."'");
	// $rowrace = mysql_fetch_array($result2);
	// $_SESSION['R'] = $rowrace[1] ;
	// $result3 = executeQuery("select * from usermajor where UserId='".$row[0]."'");
	// $rowrace = mysql_fetch_array($result2);
	// $_SESSION['UserId'] = $rowrace[1] ;
	// $result4 = executeQuery("select * from usertype where UserId='".$row[0]."'");
	// $rowrace = mysql_fetch_array($result2);
	// $_SESSION['UserId'] = $rowrace[1] ;

	if(!empty($BlogId)){
		header("Location:../blog-details.php?ComblogId=$BlogId");
	}else{

	if($_SESSION['Role'] == "Admin")
	{
		header("Location:../admin/admin-scholarships.php");
	}	
	else
	{
		$result1 = executeQuery("select * from msuser where UserId = '".$UserId."'");

		if($row['SGender']!='null'){
   				 header("Location:../dashboard.php");
		}else{


		header("Location:../profile.php");
	
}
	}
}
	
}






?>


 ?> 	