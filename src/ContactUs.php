<?php
	include_once("configPet.php")
?>
<?php
session_start();

?>
<!DOCTYPE html>

<html>
<head>
	<title>Online Pet Care System</title>
	<link rel="stylesheet" href="noticeBoard.css">
	<script src="petcareJS.js"></script>
	<script src="https://kit.fontawesome.com/95b76a116d.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<div class="header">
			<div class="navbar">
				<div class="logo">PetsStop</div>
				<ul>
					<li><a href="Hompage.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="ContactUs.php">Contact Us</a></li>
					<li><a href="FAQS.php">FAQ</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="NoticeBoard.php">Notices</a></li>
					<li><a href="SeeCreatedPetProfiles.php">My Pet Profiles</a></li>
				</ul>
			</div>
			
		</div>
		
	</nav>

	<script type="text/javascript">
		window.addEventListener("scroll", function() {
			var header = document.querySelector(".header");
			header.classList.toggle("sticky", window.scrollY > 0);
		});
	</script>
	
<br><br><br><br><br><br><br><br>
<form class="form1" action="" method="POST">
<center><h2>Contact Us</h2><br>
<p>If you want to know further information about our services feel free to contact us</p><br><br>
<input type ="text" placeholder="Your name" id="name" required><br>
<hr>
<input type ="text" placeholder="Your Mail" id="email"pattern="" required><br>
<hr>
<input type ="text" placeholder="Your message" id="msg"required><br>
<hr><br>
<input type="submit" value="Submit" name="Submit1" class= "button"><br><br>
</center>
</form>
</center>
<div>
	<footer>
	
	<div class="row">
	<div class="col">
	<img src="petlogo.png" class="logo">
	</div>
	<div class="col">
	<h3>Office<div class="underline"><span></span></div></h3>
	<p>No.458/3</p>
	<p>Gangarama road,Colombo-03</p>
	<p class="email">petsstopcare@gmail.com</p>
	<p>+94 077-4568238</p>
	<p>+94 011-2956758</p>
	</div>
	<div class="col">
	<h3>Links<div class="underline"><span></span></h3>
	<ul>
					<li><a href="Hompage.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="ContactUs.php">Contact Us</a></li>
					<li><a href="FAQS.php">FAQ</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="NoticeBoard.php">Notices</a></li>
					<li><a href="SeeCreatedPetProfiles.php">My Pet Profiles</a></li>
	</ul>
	</div>
	<div class="col">
	<h3>Newsletter<div class="underline"><span></span></h3>
	<form class= "end">
	  <i class="fa-solid fa-envelope"></i>
	  <input type="email" placeholder="Enter your email" required>
	  <button type="submit"><i class="fas fa-arrow-right"></i></button>
	</form><br>

	<i class="fab fa-facebook-f fa-2x"></i>
	<i class="fab fa-instagram fa-2x"></i>
	<i class="fab fa-whatsapp fa-2x"></i>
	<i class="fab fa-twitter fa-2x"></i>

	</div>
	</div>
	<hr>
	<p class="copyright">Easy Tutorials © 2023 - All Rights Reserved</p>
</footer>
</div>
</div>
</div>
</body>
</html>