<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'demo';

 $connection =  mysqli_connect($host,$user,$pass,$db);

 if (!$connection) 
 	return "wrong";
?>