<?php
	include_once("configPet.php")
?>
<?php
session_start();
if(!isset($_SESSION['user_name']))
	{
		echo "<script>You should registered to visit Home page!<Script>";
		header("location:loginmy.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
	<title>Online Pet Care System</title>
	<link rel="stylesheet" href="Petcare1css.css">
	<script src="petcareJS.js"></script>
	
	

</head>
<body>

<ul type="none"  class="Navi">
		<li  class="Navi"><a href="#">Home</a>
		<li class="Navi"><a href="https://courseweb.sliit.lk/login/index.php">About us</a>
		<li class="Navi"><a href="https://courseweb.sliit.lk/login/index.php">Contact us</a>
		<li class="Navi"><a href="https://courseweb.sliit.lk/login/index.php">FAQ</a>
</ul>
<h1 align="right">PetsStop.lk</h1><br>
<a href="logoutmy.php">logout</a>
<br><br>
<a href="logoutmy.php">logout</a>

<hr>
<div class="header">
<footer>
<center>
Created by Group Mads<br>
<a href="https://courseweb.sliit.lk/login/index.php">Visit our Web site</a><br>
<a href=""><img class="contactlink" src="image/download.jpeg"width=></img>
<a href=""><img class="contactlink" src="image/download.png"></img></a>
<a href=""><img class="contactlink" src="image/images.png"></img></a>
</center>
</footer>
</div>
</body>
</html>