<?php
#link DataBase
$connect = new mysqli("localhost","root","","shopmanage");
$r = mysqli_query($connect,'select * from stock');

        if (isset($_POST['btn']) ) { 
        	//Declare Variables
			$_ProductName = $_POST["ProductName"];
			$_Quantity = $_POST["Quantity"];
			$_Day = $_POST["Day"];
			echo "<script>
			console.log('hello')
			</script>";
          	//Insert into Database
			$insert = "INSERT INTO stock ( ProductName, Quantity, Day) VALUES ('$_ProductName', '$_Quantity', '$_Day')";
			$sq = mysqli_query($connect,$insert);
			header('location: stock.php');
        }
?>
<?php
#link DataBase
$connect = new mysqli("localhost","root","","shopmanage");
$r = mysqli_query($connect,'select * from selles');

        if (isset($_POST['btn']) ) { 
        	//Declare Variables
			$_ProductName = $_POST["ProductName"];
			$_PrimeryQuantity = $_POST["Quantity"];
			$_RestQuantity = $_POST["Quantity"];
			echo "<script>
			console.log('hello')
			</script>";
          	//Insert into Database
			$insert = "INSERT INTO selles ( ProductName, PrimeryQuantity, RestQuantity) VALUES ('$_ProductName', '$_PrimeryQuantity', '$_RestQuantity')";
			$sq = mysqli_query($connect,$insert);
			header('location: stock.php');
        }
?>

