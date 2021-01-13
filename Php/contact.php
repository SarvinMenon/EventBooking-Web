<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
<link rel="icon" href="logo_icon.png" type="image/png">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="contactus.css">
<link rel="stylesheet" href="footer.css">

<title>Contact Us | Konoha & Co.</title>
</head>
<body>
  <div class="navbar">
    <a href="home.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="packages.php">Packages</a>
    <a href="home.php" style="padding:0em;"><img src="logo.png" alt="logo" style="width:2.6em;"></a>
    <a href="services.php">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact</a>
  </div>

<div class = "title">
  <img src="contactus.png" >
  <hr><br>
  <p style="font-family: 'Inter', sans-serif; font-weight: bold; font-size: 1.25vw;color:#978682;">PLEASE USE THE FORM BELOW TO INQUIRE ABOUT ALL OF OUR SERVICES AND WORKING WITH KONOHA & CO.</p><br><br>

  <p>Phone: 128640172<br>Email: konoha@mmu.edu.my<br>Hidden Leaf Village</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d414895.2111496369!2d139.46068054017593!3d35.667919120148376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2sTokyo%2C%20Japan!5e0!3m2!1sen!2smy!4v1600779310729!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>


<div class="container">
  <form action="data.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Your name">

    <label for="Hpnum">Hp-Num</label>
    <input type="text"  name="Hpnum"
       pattern="[0-9]{10}"
       required placeholder="eg. 01x-xxxxxxx">


     <label for="email">Email</label>
    <input type="email" name="email"  placeholder="Your email">

    <label for="Message">Message</label>
    <textarea name="Message" placeholder="Write your message.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

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
