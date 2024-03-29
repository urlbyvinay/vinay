<?php 

$servername="sql6.freesqldatabase.com";

$username="sql6695077";

$password="r197wUzbtW";

$dbname="sql6695077";

$connection=mysqli_connect($servername,$username,$password,$dbname);


$longurl = $_POST['long_url'];



$query = "INSERT INTO urls (long_url) VALUES ('$longurl')";
$result = mysqli_query($connection, $query);

$last_id = mysqli_insert_id($connection);

//var_dump ($result);
header("location: ../?i=" .$last_id);