<?php 

$connect = new mysqli("localhost","root","","shopmanage");
$ID = $_GET['id'];
$sql = "DELETE FROM timeline WHERE id =$ID" ;
$data = mysqli_query($connect,$sql);
header('location: timeline.php');


?>