<?php 

$connect = new mysqli("localhost","root","","shopmanage");
$ID = $_GET['id'];
$sql = "DELETE FROM stock WHERE id =$ID" ;
$data = mysqli_query($connect,$sql);
header('location: stock.php');


?>