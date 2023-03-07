<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.CSS" type="text/css" />
    <link rel="animations" href="animations.CSS" type="text/css">
    
    <title>theplantsmith</title>
  </head>

  <body>
    <div style="text-align: center;"><img src="plantsmithlogo.png" alt="picsum" style="width: 250px;"/></div>
    <br />
    <div>
    <div class="nav">
            <a class="animated-border" href="index.php">Home</a>
            <a class="animated-border" href="portfolio.php">Portfolio</a>
            <a class="animated-border" href="aboutus.php">About us</a>
            <a class="animated-border" href="services.php">Services</a>
            <a class="animated-border" href="blog.php">Blog</a>
            <a class="animated-border" href="contactus.php">Contact us</a>     
    </div>
    <br><br><br><br>
    <div class="heading1">
            <p>At The Plantsmith we work closely with all our clients for a bespoke and unique garden
            design service including:<br />initial consultancy visit, garden design and plans, construction
            management, planting and garden styling.</p>
    </div>
    <br /><br />
            <div class="container">
            <div class="mySlides fade" style="text-align: center;">
                <div class="numbertext">1 / 3</div>
                <img src="slide1.png" style="width:50%">
                <div class="text">Water Bowl from Solus Decor</div>
            </div>
            </div>
            <div class="container">
            <div class="mySlides fade" style="text-align: center;">
                <div class="numbertext">1 / 3</div>
                <img src="slide2.png" style="width:50%">
                <div class="text">Caption Text</div>
            </div>
            </div>
            <div class="container">
            <div class="mySlides fade" style="text-align: center;">
                <div class="numbertext">1 / 3</div>
                <img src="slide3.png" style="width:50%">
                <div class="text">Caption Text</div>
            </div>
            </div>
            <div class="container">
            <div class="mySlides fade" style="text-align: center;">
                <div class="numbertext">1 / 3</div>
                <img src="slide4.png" style="width:50%">
                <div class="text">Caption Text</div>
            </div>
            </div>
            
        
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            
        </div>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script>
    
    
  </body>
</html>