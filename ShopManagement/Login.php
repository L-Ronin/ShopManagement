<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/logo.jpg" type="image/x-icon">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<style type="text/css">
		*{
	padding: 0;
	border: 0;
}
body{
	background-color: #8BC34A;
	display: flex;
  	justify-content: center;
  	align-items: center;
  	min-height: 100vh;
}
.container{
	height: 350px;
	width: 450px;
	background-color: #5eb12f;
	padding: 21px;
	box-shadow: 10px 10px 10px 0px #aa421e;
	border-radius: 20px;
}
.container-2{
	height: 200px;
	width: 400px;
}
.titleh{
color: white;

}
.form-label{
	color: white;
}
a{
	text-decoration: none; 
}
	</style>
</head>
<body>
<div class="container">
	<div class="titlediv">
		<center>
		<h1 class="titleh">Login</h1>
		</center>
	</div>
	<form class="container-2" method="POST">
		<label class="form-label">Email address</label>
		<input type="text" name="username" class="form-control">
		<label class="form-label">Password</label>
		<input type="password" name="password" class="form-control">
		<input type="checkbox" ><label class="form-label"> I agree whith all rules</label>
		<a href="dashboard.php"><button class="form-control" name="btn">Login</button></a>
	</form>
</div>
<?php 
        if (isset($_POST['btn']) && $_POST['username'] == 'admin' && $_POST['password'] == '12345') { 
			header('location: dashboard.php');
        }
?>


<script src="js/bootstrap.min.js"></script>
</body>
</html>