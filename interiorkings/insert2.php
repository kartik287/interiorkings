<?php

$con=mysqli_connect('localhost','root','');

if(!$con)
{
	echo "Server not connected";
}

if(!mysqli_select_db($con,'interior'))
{
	echo "No database";
}

	$name=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$age=$_POST['age'];
	$mobile_no=$_POST['mobile_no'];
	$address=$_POST['address'];

	$sql="INSERT INTO signup(username,email,password,age,mobile_no,address) VALUES('$name','$email','$password','$age','$mobile_no','$address')";

if(!mysqli_query($con,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Your data is registered successfully.";
}

header("refresh:3; url=signup.php");
?>