<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
<link rel="icon" href="logo_icon.png" type="image/png">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="footer.css">
<title>Home | Konoha & Co.</title>
</head>
<style>
* {box-sizing: border-box}
.responsive,{display: none}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>
<body>
<div class="tnavbar">
    <a href="home.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="packages.php">Packages</a>
    <a href="services.php">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact</a>
</div>

<section>
  <img src="homepic1.jpg" class="responsive">
  <img src="homepic2.jpg" class="responsive">
  <img src="homepic3.jpg" class="responsive">
  <img src="homepic4.jpg" class="responsive">
  <img src="logo_big.png" class= "homepic">
  <div class="titletext">KONOHA & CO.</div>
  <div class="subtitle">Planning, styling and coordination</div>
  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</section>


<div class = "title">
  <img src="journey.gif" style="width:96%;">
  <br>
</div>


<div>
  <p style="text-align: justify; margin : 0 10vw 0 10vw;">Kanoha & Co. is a team of professionals who aim
    to come together to create the event of your dreams with accuracy, efficiency and complete execution of your vision.</p>
  <a href="aboutus.php" class="button">meet our team</a>
  <a href="packages.php" class="button">view our packages</a>
</div>

<script>
var slideIndex = [1,1];
var slideId = ["responsive"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex[no]-1].style.display = "block";
}
</script>


<footer>
<br><br><br>
<a href="home.php" style="padding:0em;"><img src="logo_icon2.png" alt="logo" style="width:6em;"></a>
<p>HIDDEN LEAF VILLAGE &nbsp&nbsp | &nbsp&nbsp KONOHA@MMU.EDU.MY &nbsp&nbsp | &nbsp&nbsp 128640172 </p>
<br><br>
<div class="middle">
  <a class="btn" href="#">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a class="btn" href="#">
    <i class="fab fa-twitter"></i>
  </a>
  <a class="btn" href="#">
    <i class="fab fa-instagram"></i>
  </a>

</div>
</footer>
<div class="below">
  <br><br><br><br><p> @ KONOHA & CO.  | ALL RIGHTS RESERVED </p>
</div>

</body>
</html>
