<?php
	include_once("configPet.php")
?>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="slid.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
				
				<div class="search">
				<i class="fa-solid fa-user fa-2xl"></i>
				<div>
				<a href="loginmy.php"><button class="btn1">login</button></a>
				<a href="logoutmy.php"><button class="btn2">log out</button></a></div>
				</div>
			
			</div>
		
		</div>
		
	</nav>

	<script type="text/javascript">
		window.addEventListener("scroll", function() {
			var header = document.querySelector(".header");
			header.classList.toggle("sticky", window.scrollY > 0);
		});
	</script>
	<br><br><br><br>
	<div class="slideshow-container">
    <div class="mySlides fade">
        <img id="sl1" src="abt.jpg" style="width:90%">
        
    </div>
    <div class="mySlides fade">
        <img id="sl1" src="dog3.jpg" style="width:90%">
    </div>  
    <div class="mySlides fade">
        <img id="sl1" src="dog4.jpg" style="width:90%">
        
    </div>
	  </div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<br>

<div style="text-align: center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<section>
<div class="container">
<div class="box">
<div class="content">	

<h2>01</h2>
<h3>HEALTH</h3>
<ul id="det">
          <li id="l">Surgeries</li>
		  <li id="l">Vaccination</li>
		  <li id="l">Wellness exams</li>
		  <li id="l">Neutering</li>
		  <li id="l">Dental Care</li>
        </ul>
<a href="#">read more</a>
</div>
</div>

<div class="box">
<div class="content">
<h2>02</h2>
<h3>STORE</h3>
<ul id="det">
          <li id="l">Foods</li>
		  <li id="l">Medicine</li>
		  <li id="l">Accessories</li>
		  <li id="l">Toys</li>
		  <li id="l">Other</li>
        </ul>
<a href="#">read more</a>
</div>
</div>
<div class="box">
<div class="content">
<h2>03</h2>
<h3>GENERAL CARE</h3>
<ul id="det">
          <li id="l">Grooming</li>
		  <li id="l">Pet Therapy</li>
		  <li id="l">Training</li>
		  <li id="l">Pet Daycare</li>
		  <li id="l">Pet Sitting</li>
        </ul>
<a href="#">read more</a>
</div>
</div>
<div class="box">
<div class="content">
<h2>04</h2>
<h3>OTHER</h3>
<ul id="det">
          <li id="l">Advertising</li>
		  <li id="l">Pet Talent Shows</li>
		  <li id="l">Blood Donations</li>
		  <li id="l">Breeding</li>
		  <li id="l">Pet Fostering</li>
        </ul>
<a href="#">read more</a>
</div>
</div>
</div>
</section>
<div>
			<footer>
			
			<div class="row">
			<div class="col">
			<img id="logo"src="petlogo.png">
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


<!-- reffered by  coding with nick you tube channel-->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active";
}

// Automatic slideshow
setInterval(function() {
	plusSlides(1);
}, 3000); // Change slide every 3 seconds
</script>
</body>
</html>
