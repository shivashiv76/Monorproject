<?php
include_once("mysqlconnection.php");
$FirstName=$_POST["firstname"];
$LastName=$_POST["lastname"];
$Email=$_POST["mailid"];
$Country=$_POST["country"];
$FeedBack=$_POST["subject"];
$query="insert into feedback values('$FirstName','$LastName','$Email','$Country','$FeedBack')";
mysqli_query($dbconn,$query);
$msg=mysqli_error($dbconn);   
if($msg=="")
{
	echo "Send Feedback Successfully";
}
else
{
	echo $msg;
}

?>
