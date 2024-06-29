<?php
#link DataBase
$connect = new mysqli("localhost","root","","shopmanage");
$r = mysqli_query($connect,'select * from tasksadmin');

        if (isset($_POST['btnAdmin']) ) { 
        	//Declare Variables
			$_admin = $_POST["admin"];
			echo "<script>
			console.log('hello')
			</script>";
          	//Insert into Database
			$insert = "INSERT INTO tasksadmin ( admin ) VALUES ('$_admin')";
			$sq = mysqli_query($connect,$insert);
			header('location: tasks.php');
        }
        if (isset($_POST['btnWorkers']) ) { 
        	//Declare Variables
			$_workers = $_POST["workers"];
			echo "<script>
			console.log('hello')
			</script>";
          	//Insert into Database
			$insert = "INSERT INTO tasksworkers ( workers ) VALUES ('$_workers')";
			$sq = mysqli_query($connect,$insert);
			header('location: tasks.php');
        }
?>