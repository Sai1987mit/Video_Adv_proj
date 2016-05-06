<?php


//$db = new PDO("mysql:host=localhost;dbname=uad;port=3306","root","pass");

$db = mysqli_connect("localhost","root","pass","uad");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else 
	echo "Successful connection";

?>