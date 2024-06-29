<!DOCTYPE html>
<?php 
error_reporting(0);

#link DataBase
$connect = new mysqli("localhost","root","","shopmanage");
$r = mysqli_query($connect,'select * from stock');

include_once 'Models/InsertStock.php';


?>
<html>
<head>
	<link rel="icon" href="images/logo.jpg" type="image/x-icon">
	<title>stock</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
	<style type="text/css">
				.nav{
	height: 50px;
	width: 100%;
	background-color: #333;
}
.logo{
	height: 40px;
	width: 40px;
	border-radius: 50%;
}
.user{
	font-size: 30px;
	color: white;
	padding: 0px 10px;
}
.Signout{
	font-size: 30px;
	color: white;
	position: absolute;
	right: 0; 
    padding: 0px 10px;
}
a{
	text-decoration: none;
	color: white;
    font-size: 35px;
}
.content{
			display: flex;
		}
		.containe{
			background-color: #eee;
			height: 500px;
			width: 500px;
			display: flex;
			position: absolute;
		}
		.db_table{
			height: 600px;
    		width: 55%;
    		background-color: #eee;
    		position: absolute;
    		right: 0;
    		margin: 0px 35px;
		}
		.form{
			height: 500px;
			width: 500px;
		}
		@media (min-width: 1000px) {
  .form {
    height: 500px;
    width: 40%;
}
}
	</style>
</head>
<body>
<header class="nav">
	<img src="images/logo.jpg" class="logo">
	<a href="Dashboard.php"><h3 class="user">Khlifa mohammed</h3></a>
	<a href="#"><h3 class="Signout">Signout</h3></a>
</header>
<center>
	<h1>Stock Dashboard</h1>
</center>
<div class="content">
	<div class="container"  class="min-vh-100 d-flex justify-content-center align-items-center ">
	<form action="InsertStock.php" method="POST" class="form" enctype= multipart/form-data > 
		<label class="form-label">Product Name 	:</label> 
		<input type="text" name="ProductName" class="form-control ProductName"autocomplete="off" >
		<label class="form-label">Quantity	:</label> 
		<input type="text" name="Quantity" class="form-control Quantity"autocomplete="off" >
		<label class="form-label">Day	:</label> 
		<input type="text" name="Day" class="form-control Day"autocomplete="off"  >
		<input type="checkbox" name="">
		<label class="form-label">Am sure about add this product</label>
		<button class="form-control " name="btn" value="btn">Save the product</button>
	</form>
	</div>
	<div class="db_table">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ProductName</th>
      <th scope="col">Quantity</th>
      <th scope="col">Day</th>
      <th scope="col">Update</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
  		               <?php 
                
                while ($row = mysqli_fetch_array($r)) {
                echo '<tr>';
                echo '<td class="scroll">'.$row['id'].'</td>';
                echo '<td class="scroll">'.$row['ProductName'].'</td>';
                echo '<td class="scroll">'.$row['Quantity'].'</td>';
                echo '<td class="scroll">'.$row['Day'].'</td>';
                echo "<td><a href='UpdateStock.php? id=$row[id]' class = 'btn btn-success' name='Update' >Update </td>";
                echo "<td><a href='DeleteStock.php? id=$row[id]' class = 'btn btn-danger' name='Delete' >Delete </td>";
                echo '</tr>';
            } 
               
    ?>
  	</tr>
  </tbody>
	</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>