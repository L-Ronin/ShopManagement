<!DOCTYPE html>
<html lang="en">
<?php 
error_reporting(0);

#link DataBase
$connect = new mysqli("localhost","root","","shopmanage");
$r = mysqli_query($connect,'select * from selles');




?>
<head>
<link rel="icon" href="images/logo.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selles</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
    .db_table{
	height: 600px;
    width: 80%;
    background-color: #eee;
	position: absolute;
	/* right: 0; */
    margin: 0px 35px;
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
	<h1>Selles Dashboard</h1>
    <div class="db_table">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ProductName</th>
      <th scope="col">Primery Quantity</th>
      <th scope="col">Rest Quantity</th>
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
                echo '<td class="scroll">'.$row['PrimeryQuantity'].'</td>';
                echo '<td class="scroll">'.$row['RestQuantity'].'</td>';
                echo "<td><a href='UpdateStock.php? id=$row[id]' class = 'btn btn-success' name='Update' >Update </td>";
                echo "<td><a href='DeleteSelles.php? id=$row[id]' class = 'btn btn-danger' name='Delete' >Delete </td>";
                echo '</tr>';
            } 
               
    ?>
  	</tr>
  </tbody>
	</div>
</div>
</center>

<script src="js/bootstrap.min.js"></script>
</body>
</html>