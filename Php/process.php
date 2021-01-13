<?php
  $db = mysqli_connect('localhost', 'root', '', 'db');

  $bookdate = "";
  $package = "";


   if (isset($_POST['bookpackage'])) {
  	$package = $_POST['package'];
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$phone = $_POST['phone'];
  	$bookdate = $_POST['bookdate'];

  	$sql_u = "SELECT * FROM booking_table WHERE bookdate='$bookdate'";
  	$res_u = mysqli_query($db, $sql_u) or die(mysqli_error($db));



  	if (mysqli_num_rows($res_u) > 0) {
      echo "<script type='text/javascript'>
          alert('Sorry this date is taken!')
            </script>";

  	}else{
           $query = "INSERT INTO booking_table (package,name, email, phone,bookdate)
      	    	  VALUES ('$package', '$name', '$email','$phone','$bookdate')";
           $results = mysqli_query($db, $query) or die(mysqli_error($db));
           echo 'Saved!';
           header("Location: success.php");
           exit();
  }
}

?>
