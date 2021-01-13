
<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "Connection successful";
}

mysqli_select_db($con,'db');
$name=$_POST['name'];
$Hpnum=$_POST['Hpnum'];
$email=$_POST['email'];
$Message=$_POST['Message'];

$query="insert into contact_table(name,Hpnum,email,Message)
values('$name','$Hpnum','$email','$Message')";
echo "$query";
mysqli_query($con,$query);
header('location:contact.php');
?>
