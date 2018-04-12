<?php
require "init.php";
$username = $_POST["username"];
$password = $_POST["password"];
$drivers_route= "A";
$geolat= "6.670278";
$geolng= "0.425833";
$new_lat= "6.670278";
$new_lng= "0.425833";

$sql = "insert into Drivers_details (Username,Password) values ('$username','$password');";
$sql2= "insert into Drivers_location (Drivers_route,Geolat,Geolng,NewGeolat,NewGeolng) values ('$drivers_route','$geolat','$geolng','$new_lat','$new_lng');";

if(mysqli_query($con,$sql))
{
	mysqli_query($con,$sql2);
	echo "<br><h3>User registered...</h3>";
}else{
	echo "Errror on registration...". mysqli_error($con);
}
mysqli_close($con);
?>