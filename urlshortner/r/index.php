<?php
$servername="sql6.freesqldatabase.com";

$username="sql6695077";

$password="r197wUzbtW";

$dbname="sql6695077";

$connection=mysqli_connect($servername,$username,$password,$dbname);

	$id = $_GET['c'];
	
	$query = "SELECT * FROM urls where id = $id LIMIT 1";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result);



	header("location: " . $row['long_url']);