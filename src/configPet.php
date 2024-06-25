<?php
	$severname="localhost";
	$username="root";
	$password="";
	$database="petcare";
	
	$conn=new mysqli($severname,$username,$password,$database);
	
	if($conn->connect_error){
		die("Connection failed!".connect_error);
	}else{
		
	echo "connected Successfully!";
	}
?>