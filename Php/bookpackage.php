<?php include('process.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&display=swap" rel="stylesheet">
	<link rel="icon" href="logo_icon.png" type="image/png">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="package3.css">
	<title>Booking | Konoha & Co.</title>
</head>
<body>
	<div class="container">
	<form action="bookpackage.php" method="post" >
		<a href="home.php"><img style="width:10%; margin-left: 29vw;"src="logo_icon2.png"></a><br>
		<img style="margin-left:17vw; width:45%;"src="bookform.png" >
		<p style="text-align: center;font-family: 'Inter', sans-serif; font-weight: bold; font-size: 1.25vw;color:#978682;">Make your reservation now!</p><br><br>
	 <hr>
		<div>
			<label for="package">Packages :</label>
			<input style="margin-left: 6vw;"type="radio" id="package1" name="package" value="Wedding dinner">
			<label for="Wedding dinner">Wedding dinner</label>
			<input style="margin-left: 6vw;" type="radio" id="package2" name="package" value="Private party">
			<label for="Private party">Private party</label>
			<input style="margin-left: 6vw;" type="radio" id="package3" name="package" value="Corporate party">
			<label for="Corporate party">Corporate party</label>
			<br><br><hr><br>
			<div>

		<div>
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="Your name..">
		</div>

		<div>
			<label for="email">E-mail</label>
			<input type="email" name="email" placeholder="Your email..">
		</div>

		<div>
			<label for="phone">Phone</label>
			<input type="text" name="phone" placeholder="Your mobile number..">
		</div>


		<div

			<?php if (isset($name_error)): ?>
		 	class="form_error"
			<?php endif ?> >
			<label for="bookdate">Date</label>
			<input type="date" name="bookdate" placeholder="Your date.." value="<?php echo $bookdate; ?>">
			<?php if (isset($name_error)): ?>
	  	       <span><?php echo $name_error; ?></span>
	        <?php endif ?>
		</div>


		<input style="margin-left:28vw;" type="submit" value="Book" name="bookpackage">

		<img style="width:60%; margin-left: 32vw; margin-top: -8vw;"src="modaldeco.png">

	</form>
</body>
</html>
