
<?php 


$address = $_POST['address'];
$city = $_POST['city'];

$id = $_GET['id'];

$host='localhost';

$connect=mysqli_connect($host,'root','','PracticalDB');


$sql = mysqli_query($connect,"UPDATE students SET address = '$address', city= '$city' WHERE studentID= '$id'");


header("refresh:0.2 ; url=home.php");
?>