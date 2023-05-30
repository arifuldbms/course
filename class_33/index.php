<?php
    include('connection.php');

if (isset($_POST["submit"])) {
	 $name     = $_POST['name'];
	 $roll     = $_POST['roll'];
	 $phone    = $_POST['phone'];
     $address  = $_POST['address'];

	 $Query =  "INSERT INTO student (name, roll, phone, address) VALUES (' $name', '$roll ', '$phone', '$address')";

	mysqli_query($connection,$Query);
		
		
}


   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>student Entry</title>
</head>
<body>
    <a href="list.php">List</a>
	<form action="index.php" enctype="multipart/form-data" method="post">

	<label for="name">Name</label>
	<input type="text" name="name">
    <br>
	
	<label for="roll">Roll</label>
	<input type="text" name="roll">
    <br>
	
	<label for="phone">Phone</label>
	<input type="texr" name="phone">
    <br>

	<label for="address">Address</label>
	<textarea name="address" id="address" cols="30" rows="10"></textarea>
    <br>

	<input type="submit" name="submit" value="Student Entry">



</form>
</body>
</html>