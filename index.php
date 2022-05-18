<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo1 12DB";
{
	die("connection failed:".$conn->connect_error);
}
$sql="INSERT INTO
demo1tbl(firstname,lastname,email)VALUES('dinesh','kumar','dinesh@example.com')";
if($conn->query($sql)==TRUE)
{
	echo"New record created successfully";
}
else
{
	echo "Error:" .$sql."<br>" .$conn->error;
}
$conn->close();
?>