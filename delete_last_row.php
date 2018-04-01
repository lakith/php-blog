<?php


$id = $_GET['del_id'];


$host='localhost';
$connect=mysqli_connect($host,'root','','PracticalDB');



$sql = "DELETE FROM students WHERE studentID ='$id'"; 

$user_query = mysqli_query($connect, $sql);

//header("refresh:0.2 ; url=home.php");
	
?>