<?php 

	$host="localhost";
	$user="root";
	$password="";
	$dbname="php_tutorial";

$db = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());

 ?>