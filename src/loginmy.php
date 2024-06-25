<?php
	include_once("configPet.php")
?>

<?php
	session_start();
    if(isset($_SESSION['E_Mail']))
	{
		header("location:Hompage.php");
	}
	if(isset($_SESSION['E_Mail2']))
	{
		header("location:adminHome.php");
	}
	if(!empty($_POST['login']))
	{
		$E_mail=$_POST["email"];
		$password=$_POST["pw"];
		$sql1l="SELECT * from registration WHERE Email='$E_mail' and Password='$password';";
		$result1=mysqli_query($conn,$sql1l);
		$count=mysqli_num_rows($result1);
		if($count>0){
			$_SESSION['E_Mail']=$E_mail;
			echo "<script>alert('You are Logged in')</script>";
			
			echo "<script>window.location.href = 'Hompage.php';</script>";
		}
		else
		{
			echo "<script>alert('You have entered the incorect username or password')</script>";
		}
	}
	if(!empty($_POST['login2']))
	{
		$E_mail=$_POST["email2"];
		$password=$_POST["pw2"];
		$sql1l="SELECT * from registration WHERE Email='$E_mail' and Password='$password';";
		$result1=mysqli_query($conn,$sql1l);
		$count=mysqli_num_rows($result1);
		if($count>0){
			$_SESSION['E_Mail2']=$E_mail;
			echo "<script>alert('You are Logged in as Admin')</script>";
			
			echo "<script>window.location.href ='adminHome.php';</script>";
		}
		else
		{
			echo "<script>alert('You have entered the incorect username or password')</script>";
		}
	}
	
	?>
	<script>

  
    
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Online Pet Care System</title>
	<link rel="stylesheet" href="noticeBoard.css">

	
	

</head>
<body>
<center>
<h1 id="logh">PetsStop</h1><br>
		
		
		<h1 id ="log">Login as User</h1>
	<form method="POST" class="form1">
	<center>
	
	<label>E-mail:</label><br><br>
	<input type="text"  name="email" placeholder="Your Email" id="email"><br><br>
	<label>Password:</label><br><br> 
	<input type="password" name="pw" placeholder="Your password" id="pwd"><br><br>
	<input type="submit" name="login" value="Login" class ="button"><br><br><br><br>
	<h2>If you are not registered.</h2><br><button id="reg"><a href="registration.html" >Register</a></button>
	</center>
</form>	

	
		<h1 id ="log">Login as Admin</h1>
	<form method="POST" class="form1">
	<center>
	
	<label>E-mail:</label><br><br>
	<input type="text"  name="email2" placeholder="Your Email" id="email"><br><br>
	<label>Password:</label><br><br> 
	<input type="password" name="pw2" placeholder="Your password" id="pwd"><br><br>
	<input type="submit" name="login2" value="Login" class ="button"><br><br><br><br>
	
</form>	







</body>
</html>