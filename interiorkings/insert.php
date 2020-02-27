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
	$contact_no=$_POST['contact_no'];
	$message=$_POST['message'];

	$sql="INSERT INTO details(username,email,contact_no,message) VALUES('$name','$email','$contact_no','$message')";

if(!mysqli_query($con,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header("refresh:5; url=contact.php");
?>