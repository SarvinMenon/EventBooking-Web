<!DOCTYPE html>
<?php
    $conn=mysqli_connect("localhost", "root" , "" ,"db");

    if(isset($_POST['submit']))
    {
    $course=$_POST['check_list'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['hp'];
    $message=$_POST['message'];
    $date=$_POST['date'];

      $chk="";
      foreach($course as $chk1){
        $chk.=$chk1.",";
      }
      $sql="Insert into db_service (name,email,phone,message,date,course) values('$name','$email','$phone','$message','$date','$chk')";
      if($conn->query($sql)===true){
        echo"success";
      }else{
        echo"error";
      }
    }
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
<link rel="icon" href="logo_icon.png" type="image/png">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="services.css">
<link rel="stylesheet" href="package3.css">
<link rel="stylesheet" href="footer.css">
<title>Services | Konoha & Co.</title>
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
  <img src="services.png">
  <p style="font-family: 'Inter', sans-serif; font-weight: bold; font-size: 1.25vw;color:#978682;">What we offer</p><br><br>
  <hr><br><br><br><br>
</div>

<div id="service">
<div id='pic1'><img src="service1.jpg" alt="wedding"></div>
<div id='box1'>
<h2>Hair & Makeup</h2>
<p>You no longer need to spend hours searching for a good makeup artist because we have got the best talent under our roof.
  Our talented and professional makeup artists and hairstylists are hand-selected with you in mind! Now you’d be thinking that
  we will be out of your budget, but let us tell you that we offer phenomenal makeup packages without making you spend a lot.
  We are a one stop solution for all your makeup needs</p>
</div>
</div>

<div id="service">
<div id='pic2'><img src="service2.jpg" alt="wedding"></div>
<div id='box2'>
<h2>Decor</h2>
<p>In any event or party, decors are the next big thing. You might be too busy at planning everything else, but do not forget to
  brainstorm about your party’s décor and centerpieces. Those details should never be taken for granted. Perhaps our supplier
  for the table and chair rentals will also cover the table arrangements and accents, you just have to shoot us the details.</p>
</div>
</div>

<div id="service">
<div id='pic3'><img src="service3.jpg" alt="wedding"></div>
<div id='box3'>
<h2>Catering</h2>
<p>Catering to a large gathering can be a daunting task to many, but with the right caterers equipment for rentals is sure to make
  your event go smoothly. So, if you are planning a wedding, irrespective of the season, or outdoor family get-together, contact us
  for list of various types of cuisines from over 50 caterers. We also got you covered for stove rentals,
  beverage dispenser, BBQ rental, serving trays, utensils, kitchen equipment rentals and etc.</p>
</div>
</div>

<div id="service">
<div id='pic4'><img src="service4.jpg" alt="wedding"></div>
<div id='box4'>
<h2>Emcee</h2>
<p>Here at Konoha Events & Co we offer emcee services for events and functions anywhere in Malaysia. We have a team of event
  emcees who can manage a function superbly.Our event emcees are fluent in more than one language. They not only speak well but speak
  correctly. This aspect is important particularly where event emcees using English is concerned. We offer emcee services for different
  types of events and audiences.</p>
</div>
</div>

<div id="service">
<div id='pic3'><img src="service5.jpg" alt="wedding"></div>
<div id='box3'>
<h2>Photography & Videography</h2>
<p>Here at Konoha Events & Co we offer emcee services for events and functions anywhere in Malaysia. We have a team of event
  emcees who can manage a function superbly.Our event emcees are fluent in more than one language. They not only speak well but speak
  correctly. This aspect is important particularly where event emcees using English is concerned. We offer emcee services for different
  types of events and audiences.</p>
</div>
</div>

<div id="service">
<div id='pic4'><img src="service6.jpg" alt="wedding"></div>
<div id='box4'>
<h2>DJ & Live Music</h2>
<p>Here at Konoha Events & Co we offer emcee services for events and functions anywhere in Malaysia. We have a team of event
  emcees who can manage a function superbly.Our event emcees are fluent in more than one language. They not only speak well but speak
  correctly. This aspect is important particularly where event emcees using English is concerned. We offer emcee services for different
  types of events and audiences.</p>
</div>
</div>

<div id="service">
<div id='pic3'><img src="service7.jpg" alt="wedding"></div>
<div id='box3'>
<h2>Personal Chauffeur</h2>
<p>Here at Konoha Events & Co we offer emcee services for events and functions anywhere in Malaysia. We have a team of event
  emcees who can manage a function superbly.Our event emcees are fluent in more than one language. They not only speak well but speak
  correctly. This aspect is important particularly where event emcees using English is concerned. We offer emcee services for different
  types of events and audiences.</p>
</div>
</div>



<div class="container">
  <form  method="post"  style="margin-top:245vw;">
    <p style="text-align: center;font-family: 'Inter', sans-serif; font-weight: bold; font-size: 1.25vw;color:#978682;">Wanna book a service?</p><br><br>
        <hr><br><br><br>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Your name..">

        <label for="email">E-mail</label>
        <input type="email" name="email"  placeholder="Your last name..">

         <label for="phone">Phone number</label>
        <input type="text"  name="Hpnum"
           pattern="[0-9]{10}"
           required placeholder="eg. 01x-xxxxxxx">

        <label for="message">Message</label>
        <textarea name="message"  placeholder="Write your message.." style="height:200px"></textarea>

        <label for="date">Date</label>
       <input type="date" name="date">

        <label for="services">Services</label><br><br>
       <input type="checkbox" name="check_list[]" value="HairMakeup">
       <label for="service1">Hair & Makeup</label><br>
       <input type="checkbox" name="check_list[]" value="Catering">
       <label for="service2">Catering</label><br>
       <input type="checkbox"  name="check_list[]" value="Decor">
       <label for="service3">Decor</label><br>
       <input type="checkbox"  name="check_list[]" value="Emcee">
       <label for="service4">Emcee</label><br>
       <input type="checkbox"  name="check_list[]" value="Catering">
       <label for="service5">Photography & Videography</label><br>
       <input type="checkbox" name="check_list[]" value="Decor">
       <label for="service6">DJ</label><br>
       <input type="checkbox" name="check_list[]" value="Emcee">
       <label for="service7">Personal Chauffeur</label><br>


        <input style="margin-left:28vw;"type="submit" value="Book" name="submit">
  </form>

</div>

<footer>
<br><br><br>
<div class="middle" style="margin-top:6em;">
  <a href="home.php" style="padding:0em;"><img src="logo_icon2.png" alt="logo" style="width:6em;"></a><br>
  <p>HIDDEN LEAF VILLAGE &nbsp&nbsp | &nbsp&nbsp KONOHA@MMU.EDU.MY &nbsp&nbsp | &nbsp&nbsp 128640172 </p>
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
<div class="below" >
  <br><br><br><br><p> @ KONOHA & CO.  | ALL RIGHTS RESERVED </p>
</div>
</body>

</html>
