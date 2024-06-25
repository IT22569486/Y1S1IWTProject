<?php
	include_once("configPet.php")
?>
<?php

session_start();


?>
<!Doctype html>

    <head>
    	<title>FAQs</title>

        <link rel = "stylesheet" href = "FAQS.css"></link>
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

    	<div class = "Accordion">
    		<div class = "ContentBox">
    			<div class = "Lable">Q: What are the services you offer for pets?</div>
    			<div class = "Content">

    				<p> We offer a range of services for pets, including vaccinations, wellness exams,neutering, dental care,
    					grooming,Pet training, and petdaycare.</p>

    		    </div>
    		</div>
    		<div class = "ContentBox">
    			<div class = "Lable">Q: What are the services you offer for pets?</div>
    			<div class = "Content">

    				<p> We offer a range of services for pets, including vaccinations, wellness check-ups,neutering, dental care,
    					grooming,pet talent shows,Pet therapy sessions and petdaycare.</p>

    		    </div>
    		</div>
    		<div class = "ContentBox">
    			<div class = "Lable">Q: How often should I bring my pet in for a check-up?</div>
    			<div class = "Content">

    				<p>Generally recommended to bring your pet for a check-up sessions at least once a year.But may depend on your pet'age,medical conditions and other factors.

    		    </div>
    		</div>
    		<div class = "ContentBox">
    			<div class = "Lable">Q: What should I do in case of a pet emergency?</div>
    			<div class = "Content">

    				<p> during our regular business hours, please call our clinic immediately. If it's after hours we recommend to contact the nearest emergency veterinary clinic.</p>

    		    </div>
    		</div>
    		<div class = "ContentBox">
    			<div class = "Lable">Q: How can I train my pet?</div>
    			<div class = "Content">

    				<p> We offer basic training tips and resources to help you train your pet at home.And we offer training sessions conducted by skilled trainers.Please contact our hotline </p>

    		    </div>
    		</div>
    		<div class = "ContentBox">
    			<div class = "Lable">Q: What should I feed my pet?</div>
    			<div class = "Content">

    				<p>The nutritional needs of pets can based on factors such as age, breed,health conditions. We can provide personalized recommendations for your pet, including advice on commercial pet food, portion sizes, and any necessary dietary restrictions.Please contact us.</p>

    		    </div>
    		</div>
            <div class = "ContentBox">
                <div class = "Lable">Q: What vaccinations does my pet need?</div>
                <div class = "Content">

                    <p>: Vaccination requirements can based on the type of the pet and their lifestyle. Common vaccinations for dogs include rabies, distemper, and parvovirus, while cats often need vaccinations for rabies, feline distemper, and leukemia.Our veterinarians can guide you.You can contact us about any queries</p>

                </div>
            </div>
            <div class = "ContentBox">
                <div class = "Lable">Q: How do I schedule an appointment for my pet?</div>
                <div class = "Content">

                    <p>To schedule an appointment for your pet, you can call us directly through our hotline.Before that you need to make a pet profile and select a prefered veterinarian</p>

                </div>
            </div>
    	</div>
	
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
					<li><a href="ContactUs.php">Contact</a></li>
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
	</div>
</div>
</footer>



    </body>




</html>