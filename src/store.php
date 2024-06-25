<?php
	include_once("configPet.php")
?>
<?php
session_start();
	if(!isset($_SESSION['E_Mail']))
	{
		header("location:loginmy.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
	<script src="https://kit.fontawesome.com/95b76a116d.js" crossorigin="anonymous"></script>
	
	<title>PetsStop Store</title>
	<meta name="description" content="Online pet care system">
	<link rel="stylesheet" href="store.css">
	
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
	<br><br><br><br><br><br>
	<h1 class="main-title">Pets Store</h1>
	<section class="container content-section">
		<h2 class="section-header">FOODS</h2>
		<div class="shop-items">
		<div class="shop-item">
			<span class="shop-item-title">Friskies</span>
			<img class="shop-item-image" src ="food1.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.6300.00</span>
				<span class="shop-item-code"> ID : 1001</span>
			</div>
		
		</div>
		
			<div class="shop-item">
			<span class="shop-item-title">Pedigree</span>
			<img class="shop-item-image" src ="food7.webp"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.4000.00</span>
				<span class="shop-item-code"> ID : 1002</span>
			</div>
		
		</div>
		
			<div class="shop-item">
			<span class="shop-item-title">Kaytee</span>
			<img class="shop-item-image" src ="food4.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.1058.00</span>
				<span class="shop-item-code"> ID : 1003</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Hartz</span>
			<img class="shop-item-image" src ="food3.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.1200.00</span>
				<span class="shop-item-code"> ID : 1004</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Vital</span>
			<img class="shop-item-image" src ="food2.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.800.00</span>
				<span class="shop-item-code"> ID : 1005</span>
			</div>
		
		</div>
		</div>
	</section>
	
	<section class="container content-section">
		<h2 class="section-header">MEDICINE</h2>
		<div class="shop-items">
		<div class="shop-item">
			<span class="shop-item-title">Turmeric Chews</span>
			<img class="shop-item-image" src ="med1.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.1350.00</span>
				<span class="shop-item-code"> ID : 1006</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Coughly</span>
			<img class="shop-item-image" src ="med3.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.1486.00</span>
				<span class="shop-item-code"> ID : 1007</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Mite Treatment</span>
			<img class="shop-item-image" src ="med9.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.998.00</span>
				<span class="shop-item-code"> ID : 1008</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Bird Biotic</span>
			<img class="shop-item-image" src ="med11.jpg"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.4560.00</span>
				<span class="shop-item-code"> ID : 1009</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Thunder Wunders</span>
			<img class="shop-item-image" src ="med2.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.7120.00</span>
				<span class="shop-item-code"> ID : 1010</span>
			</div>
		</div>
		</div>
	</section>
	
	
	<section class="container content-section">
		<h2 class="section-header">OTHER</h2>
		<div class="shop-items">
		<div class="shop-item">
			<span class="shop-item-title">Pet Bed</span>
			<img class="shop-item-image" src ="acc12.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.9999.00</span>
				<span class="shop-item-code"> ID : 1011</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Pet Bowl</span>
			<img class="shop-item-image" src ="acc7.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.2000.00</span>
				<span class="shop-item-code"> ID : 1012</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Bird Cage</span>
			<img class="shop-item-image" src ="acc9.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.9875.00</span>
				<span class="shop-item-code"> ID : 1013</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Dog Collars</span>
			<img class="shop-item-image" src ="acc6.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.1600.00</span>
				<span class="shop-item-code"> ID : 1014</span>
			</div>
		
		</div>
		
		<div class="shop-item">
			<span class="shop-item-title">Pet Carrier</span>
			<img class="shop-item-image" src ="acc11.png"><br><br>
			<div class= "shop-item-details">
				<span class="shop-item-price">Rs.9988.00</span>
				<span class="shop-item-code"> ID : 1015</span>
			</div>
		
		</div>
		</div>
		
	</section>
	
	<section >
			<button class="btn btn-primary btn-purchase" type="button"><a href= "storeform.html">PURCHASE</button></a>
	</section>
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
	<form>
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
