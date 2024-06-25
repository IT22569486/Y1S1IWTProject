<?php
	session_start();
	unset($_SESSION['E_Mail']);
	
	echo "<script>alert('Logged Out')</script>";
	
	echo "<script>window.location.href = 'loginmy.php';</script>";

?>