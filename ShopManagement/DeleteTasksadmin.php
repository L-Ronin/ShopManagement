<?php 

$connect = new mysqli("localhost","root","","shopmanage");
$ID = $_GET['id'];
$sql = "DELETE FROM tasksadmin WHERE id =$ID" ;
$data = mysqli_query($connect,$sql);
header('location: tasks.php');


?>