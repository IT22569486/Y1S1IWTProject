<?php
	include_once("configPet.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/95b76a116d.js" crossorigin="anonymous"></script>
    </head>
    <body>
         <div class="navbar">
            <div class="logo">PetsStop<br>Admin portral</div>
            <ul>
                 <li><a href="#">Home</a></li>
                  <li><a href="vetindex.php">Edit</a></li>
                  <li><a href="addvet.html">Add vet</a></li>
             </ul>
			<div class="search">
				
				<div>
				
				<a href="logoutAdmin.php"><button class="btn2">log out</button></a></div>
				</div>
        </div>

       
        <div class="slideshow-container">
            <div class="myslides">
                
                <img src="pexels-gustavo-fring-6816849.jpg" style="width:100%;">
                
            </div>
            <div class="myslides">
                
                <img src="pexels-international-fund-for-animal-welfare-5487067.jpg" style="width:100%;">
               
            </div>
            <div class="myslides">
                
                <img src="pexels-international-fund-for-animal-welfare-5487072.jpg" style="width:100%;">
                
            </div>
        
    
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    
        <br>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
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
        <h3>Newsletter<div class="underline"><span></span></h3>
        <div class ="mail">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" placeholder="Enter your email" required>
          <button type="submit"><i class="fas fa-arrow-right"></i></button>
        </div><br>
    
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
    
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            // Auto play slideshow
            setInterval(function() {
                plusSlides(1);
            }, 3000);
    
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
    
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
    
            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("myslides");
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
        </script>
    
       
    </body>
    </html>