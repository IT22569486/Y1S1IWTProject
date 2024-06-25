<?php
	session_start();
	unset($_SESSION['E_Mail2']);
	
	echo "<script>alert('Logged Out')</script>";
	echo "<script>window.location.href = 'Hompage.php';</script>";

?>