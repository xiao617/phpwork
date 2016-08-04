<?php
include('link.php');

session_start();
if($_SESSION["create"]==3){
	$_SESSION["create"]=4;
	$nickname=$_POST['nickname'];
	$username=$_POST['username'];
	$pword=$_POST['pword'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$cellphone=$_POST['cellphone'];
	$gender=$_POST['gender'];
	$location=$_POST['location'];
	$address=$_POST['address'];
	echo $_SESSION["create"];
}
else{
	$url = "index.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}

?>
<html>
<head>
	<title>newdata</title>
	<link rel="stylesheet" href="userstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<p class="text-center">The&nbspEnd</p>
<br>
<form method="post" action="newuserset.php" id="data1">
<p class="text-center fr">Do you want to say something?</p>
<p class="text-center ins"><textarea name="notes" cols="40" rows="4"></textarea></p>
<input type="hidden" name="gender" value="<?php echo $gender; ?>">
 <input type="hidden" name="location" value="<?php echo $location; ?>">
  <input type="hidden" name="address" value="<?php echo $address; ?>">
 <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
 <input type="hidden" name="username" value="<?php echo $username; ?>">
 <input type="hidden" name="pword" value="<?php echo $pword; ?>">
  <input type="hidden" name="phone" value="<?php echo $phone; ?>">
 <input type="hidden" name="cellphone" value="<?php echo $cellphone; ?>">
   <input type="hidden" name="email" value="<?php echo $email; ?>">
</form>
<a href="newuserset.php" onclick="document.getElementById('data1').submit();return false;" ><p class="text-center fr">next-></p></a>
</body>
</html>
