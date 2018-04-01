<?php

$first_name = htmlentities($_POST['first_name']);
$last_name = htmlentities($_POST['last_name']);
$add = htmlentities($_POST['address']);
$city = htmlentities($_POST['city']);


if(empty($first_name) || empty($last_name) || empty($add) || empty($city))
{
	die('Enter username and password');
}

$host='localhost';

$connect=mysqli_connect($host,'root','','PracticalDB');

$sql = mysqli_query($connect,"INSERT INTO students (first_name, last_name,address,city) VALUES('$first_name','$last_name','$add','$city')");

header("refresh:0.2 ; url=home.php");

?>