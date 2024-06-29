<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/logo.jpg" type="image/x-icon">
	<title>Dashboard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="indexs.css">
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
.parent{
	height: 400px;
	width: 700px;
	background-color: white;
	display: grid;
	grid-template-columns: repeat(4, auto);
	gap:10px 10px;
	margin:100px; 
}
.item{
/*	height: 50px;
	width: 50px;*/
	background-color: #5eb12f;
	display: flex;
	justify-content: center;
	align-items: center;
	/*align-content: center;*/
}
.parent .item1{
/*	grid-column: 1 / 4;
*/}
.parent .item2{
	grid-column: 2 / 5
}

</style>
</head>
<body>


<header class="nav">
	<img src="images/logo.jpg" class="logo">
	<a href="#"><h3 class="user">Khlifa mohammed</h3></a>
	<a href="Login.php"><h3 class="Signout">Signout</h3></a>
</header>

<center>
	<h1>Dashboard</h1>

	<div class="parent">
		<div class="item1 item"><a href="stock.php">Stock</a></div>
		<div class="item2 item"><a href="timeline.php">Workers</a></div>
		<div class="item3 item"><a href="selles.php">Sells</a></div>
		<div class="item4 item"><a href="invoice.php">Invoice</a></div>
		<div class="item5 item"><a href="tasks.php">Taskes</a></div>
		<div class="item6 item"><a href="#" class="admin">Admin</a></div>
</center>
	</div>

<script type="text/javascript">
	var admin = document.querySelector(".admin")
	admin.onclick = function(){
		alert(" عذرا هذا المحتوى غير متوفر حاليا      ")
	}
</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>