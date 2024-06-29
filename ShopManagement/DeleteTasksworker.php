<?php 

$connect = new mysqli("localhost","root","","shopmanage");
$ID = $_GET['id'];
$sql = "DELETE FROM tasksworkers WHERE id =$ID" ;
$data = mysqli_query($connect,$sql);
header('location: tasks.php');


?>