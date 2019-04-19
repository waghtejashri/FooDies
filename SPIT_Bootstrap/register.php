<?php

$name=$_POST['name1'];
$email=$_POST['email1'];
$password=$_POST['pass'];
$con_pass=$_POST['con_pass'];
$addrs=$_POST['address'];
$country=$_POST['con'];
$state=$_POST['state'];
$city=$_POST['city'];

$date=htmlentities($_POST['date']);
$dob=date('Y-m-d', strtotime($date));


if (!empty($name) || !empty($email)||!empty($password) ||!empty($con_pass) || ! empty($country) || !empty($state) || !empty($city) || !empty($addrs) || !empty($dob)) {
	include "config.php";

	if (mysqli_connect_error()) {
		die("Connect Error('.mysqli_connect_errno().')" .mysqli_connect_error());
	}else{
		$select="SELECT email FROM registration WHERE email= ? LIMIT 1";
		$insert="INSERT INTO registration (name, dob, email, password, con_pass, address, state, city, country)
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		//$add=$conn->prepare("INSERT INTO registration (gender) VALUES (?)");
		//prepare statement

		$stmt=$conn->prepare($select);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows();

		if($rnum==0){
			$stmt->close();

			$stmt=$conn->prepare($insert);
			$stmt->bind_param("sssssssss", $name, $dob, $email, $password, $con_pass, $addrs, $city, $state, $country);
			//$add->bind_param("s", $_POST['male']);
			$stmt->execute();
			//$add->execute();
		}else{
			echo "Someone already register using this email";
		}
		/*if(isset($_POST['male'])){
			$gender = $_POST['male'];
			$sqlquery="INSERT INTO sign_up (gender) values ('$gender')";
			$sql1=mysqli_query($conn, $sqlquery);
			echo "gender add succesfully"; 
		}*/


		$stmt->close();
		$sql=mysqli_query($conn, "INSERT INTO login VALUES('$email', '$con_pass')");	
		$conn->close();
		header("refresh:0; url=r.html");	
	}
}else{
	echo "All field are required";
	die();
}

//$sql_query=mysql_query($conn, "SELECT confirm_pass, email FROM registration");

/*
$sql="INSERT INTO registration (fname, lname, password)
VALUES ('$_POST[name]', '$_POST[lname]','$_POST[password]')";

if(!mysqli_query($conn, $sql))
	{
		die("Error:".mysqli_error($conn));
	}

	echo "Record Succesful :))";
	mysqli_close($conn);
	header("refresh:2; url=reg_form.php"); 
*/
?>