<!DOCTYPE html>
<html lang="en">
<?php 
error_reporting(0);

#link DataBase
$connect = new mysqli("localhost","root","","shopmanage");
$r = mysqli_query($connect,'select * from tasksadmin');

$ri = mysqli_query($connect,'select * from tasksworkers');
include_once 'Models/InsertStock.php';


?>
<head>
<link rel="icon" href="images/logo.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASKS</title>
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
.content{
    display:flex;
}
.workers , .admin{
    height:80vh;
    width: 40%;
    background:#eee;
    margin: 30px 70px;
}
.btn-add{
    width: 20%;
    background: #198754;
    color: white;
}
.btn-add:hover{
    width: 20%;
    background: #198754;
    color: white;
}
.flex-div{
    display:flex;
}
.list-group-item{
    display: flex;
    flex-direction: row;
    padding: 15px;
    margin: 5px 0px;
}
.btn-adds{
    position: absolute;
    right: 0;
    margin: -1% 0px;
}
.list-group{
    margin: 10px 0px;
}
</style>
</head>
<body>
<header class="nav">
	<img src="images/logo.jpg" class="logo">
	<a href="Dashboard.php"><h3 class="user">Khlifa mohammed</h3></a>
	<a href="#"><h3 class="Signout">Signout</h3></a>
</header>
<div class="content">
    <div class="workers">
        <center>
        <h2 class="title">workers</h2>
        <form action="insertTasks.php" method="POST">
            <div class="flex-div">
                <input type="text" class="form-control" name="workers" autocomplete="off">
                <button class="form-control btn-add" name="btnWorkers">Add </button>
            </div>
        </form>
                    <?php 
                
                while ($row = mysqli_fetch_array($ri)) {
                echo '<ul class="list-group">';
                echo "<li class='list-group-item'>".$row['workers']." <a href='DeleteTasksworker.php? id=$row[id]'  class='btn btn-adds btn-danger'>Delete</a></li>";
                echo '</ul>' ;
           } 
               
    ?>
        </center>
    </div>
    <div class="admin">
        <center>
        <h2 class="title">Admin</h2>
        <form action="insertTasks.php" method="POST">
            <div class="flex-div">
                <input type="text" class="form-control" name="admin" autocomplete="off">
                <button class="form-control btn-add" name="btnAdmin">Add </button>
            </div>
        </form>
        <?php 
                
                while ($row = mysqli_fetch_array($r)) {
                echo '<ul class="list-group">';
                echo "<li class='list-group-item'>".$row['admin']." <a href='DeleteTasksadmin.php? id=$row[id]'  class='btn btn-adds btn-danger'>Delete</a></li>";
                echo '</ul>';
           } 
               
    ?>
            
        </center>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>