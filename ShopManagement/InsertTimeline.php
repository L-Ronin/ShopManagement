<?php
#link DataBase
$connect = new mysqli("localhost","root","","shopmanage");
$r = mysqli_query($connect,'select * from timeline');

        if (isset($_POST['btn']) ) { 
        	//Declare Variables
			$_Worker = $_POST["Worker"];
			$_Position = $_POST["Position"];
			$_PhoneNumber = $_POST["PhoneNumber"];
			echo "<script>
			console.log('hello')
			</script>";
          	//Insert into Database
			$insert = "INSERT INTO timeline ( workers, position, PhoneNumber) VALUES ('$_Worker', '$_Position', '$_PhoneNumber')";
			$sq = mysqli_query($connect,$insert);
			header('location: timeline.php');
        }
?>
