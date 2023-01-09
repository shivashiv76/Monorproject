<?php
include_once("mysqlconnection.php");
$Name=$_POST["name"];
$Email=$_POST["email"];
$Password=$_POST["pswd"];
$query="insert into signupback values('$Name','$Email','$Password')";
mysqli_query($dbconn,$query);
$msg=mysqli_error($dbconn);   
if($msg=="")
{
	echo "Sign up Sucessfully";
}
else
{
	echo $msg;
}

?>
