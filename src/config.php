<?php

$servername = "Localhost" ;
$username = "root";
$password = "";
$databasename = "vet details";

$conn = new mysqli("Localhost","root","","vet details");

if($conn -> connect_error){
	
	die("Connection fail!".$conn->connect_error);
	
}else{
	
	echo("Connection succesfull!");
	
}
?>