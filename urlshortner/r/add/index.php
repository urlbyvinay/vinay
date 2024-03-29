<?php 

$servername="localhost";

$username="root";

$password="";

$dbname="url_short";

$connection=mysqli_connect($servername,$username,$password,$dbname);


$longurl = $_POST['long_url'];



$query = "INSERT INTO urls (long_url) VALUES ('$long_url')";
$result = mysqli_query($connection, $query);

$last_id = mysqli_insert_id($connection);

//var_dump ($result);
header("location: ../?i=" .$last_id);