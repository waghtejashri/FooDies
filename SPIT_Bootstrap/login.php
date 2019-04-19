
<?php
$error="";
session_start();

include "config.php";

$username=$_REQUEST['uname'];
$pass=$_REQUEST['password'];
//$result=mysqli_query($conn, "SELECT * FROM login WHERE username='".$_POST["email"] . "'AND password='". $_POST["password"]."'");
$query=mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$pass'");
//echo $result;
$row_count=mysqli_num_rows($query);
//echo "Welcome";
if($row_count == TRUE)
{
	$_SESSION["email"]=$username;
	//echo "Welcome".$_SESSION["email"];
	header('location:first1.php');
}else{

	header('location:login.html');
}
?>