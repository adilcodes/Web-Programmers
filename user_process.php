<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User_Process</title>
</head>

<body>
<?php
include "database.php";
?>
<?php

if(isset($_POST["submit"])){

     $user_name=$_POST["user_name"];
	 $user_email=$_POST["user_email"];
	 $user_phone=$_POST["user_phone"];
	 $user_message=$_POST["user_message"];

$query="INSERT INTO user_contact VALUES(NULL,'$user_name','$user_email','$user_phone','$user_message')";

            $result=mysqli_query($con,$query);
			
		 if($result){
			 
			 
		//echo "You Have Been Added Successfully";
		
		   header("location:index.php?msg=Your message has been delivered");	 
			 }else{
				 
				 header("location:index.php?msg=Your message has not been delivered");
				 
				 }	
   
}
?>

</body>
</html>