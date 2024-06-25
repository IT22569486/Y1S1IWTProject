<?php
	include_once("configPet.php")
?>
<?php
session_start();

?>
<html>
<head>
<title>box2</title>
<link rel="stylesheet" href="about.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
	<br><br><br><br><br>
 <div class = "wrapper">
        <div class ="main">
            <article>
                <h1>About Us</h1>
                <blockquote>
                    We are a online platform for all your pet's needs.Visit our store to buy foods and other pet requirements
					and get medical assistance for your pet at an affordable price.<br>
					We also provide a platform to share your neighbourhood pet related events, so you can tell it to the whole world. 
                </blockquote>
            </article>
			
			  <div class="container2">
    <div class="card">
      <div class="imgbx">
        <a href="#">
          <img src="Vet1.jpg">
        </a>
        <h2>Dr.Sajith Kiriella</h2>
        <ul id="det">
          <li id="l">Vet ID: V01</li>
		  <li id="l">Hospital: Hemas Hospital</li>
		  <li id="l">Specialization: Shelter Medicine</li>
		  <li id="l">Clinical Experience: 10 Years</li>
		  <li id="l">Contact Number: 0774568967 / 0714523258</li>
		  <li id="l">Email:kumarab@gmail.com</li>
        </ul>
      </div>
    </div>
  
    <div class="card">
      <div class="imgbx">
        <a href="#">
          <img src="Vet2.jpg">
        </a>
        <h2>Dr.Janet Rodrigo</h2>
        <ul id="det">
          <li id="l">Vet ID: V02</li>
		  <li id="l">Hospital: Nawaloka Hospital</li>
		  <li id="l">Specialization: Exotic companion mammals</li>
		  <li id="l">Clinical Experience: 15 Years</li>
		  <li id="l">Contact Number: 0727856459 / 0778292253</li>
		  <li id="l">Email:janet93r@gmail.com</li>
        </ul>
      </div>
    </div>
  
    <div class="card">
      <div class="imgbx">
        <a href="#">
          <img src="Vet3.jpg">
        </a>
       <h2>Dr.Kamal Perera</h2>
        <ul id="det">V03</li>
		  <li id="l">Hospital: Helan Hospital</li>
		  <li id="l">Specialization: Canine and feline</li>
		  <li id="l">Clinical Experience: 8 Years</li>
		  <li id="l">Contact Number: 0782788725 / 0761502225</li>
		  <li id="l">Email:kamalrat45@gmail.com</li>
        </ul>
    </div>
  </div>
        </div>
    </div>



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
