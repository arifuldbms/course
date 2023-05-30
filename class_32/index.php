<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'wdb2';

 $connection =  mysqli_connect($host,$user,$pass,$db);

 if (!$connection) {
 	return "wrong";
}

if (isset($_POST["submit"])) {
	 $Name     = $_POST['name'];
	 $Email    = $_POST['email'];
	 $Password = $_POST['password'];

	 $Query =  "INSERT INTO users (name, email, password, status) VALUES (' $Name', '$Email', '$Password',1)";

	mysqli_query($connection,$Query);
		
		
}


   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>
<body>
	<form action="index.php" enctype="multipart/form-data" method="post">

	<label for="Name">Name</label>
	<input type="text" name="name">

	<label for="Email">Email</label>
	<input type="email" name="email">

	<label for="Password">Password</label>
	<input type="password" name="password">

	<input type="submit" name="submit" value="Register">
	
</body>
</html>