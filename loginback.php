<?php
session_start();
include_once("mysqlconnection.php");
$Email=$_POST["email"];
$Password=$_POST["pswd"];
$query="select * from signupback where Email='$Email' and Password='$Password'";

$table=mysqli_query($dbconn,$query);
$count=mysqli_num_rows($table);
if($count ==0) 
{
echo "id password does not match";

}
else
{
	echo "Login";
	echo "<script>window.location.href='mcq.php'</script>";
	
}
$_SESSION['Email']=$Email;
?>
