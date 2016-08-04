<?php
include('link.php');
session_start();
if($_SESSION["create"]==1){
	$_SESSION["create"]=2;
	$nickname=$_POST['nickname'];
	$username=$_POST['username'];
	$pword=$_POST['pword'];
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
<p class="text-center">Let's&nbspcontinue&nbsp<?php echo $nickname;?></p>
<br>
<form method="post" action="newdata_3.php" id="data1">
<p class="text-center fr">What's your email:</p>
<p class="text-center ins"><input type="text" name="email"></p>
<p class="text-center fr">your phone:</p>
<p class="text-center ins"><input type="text" name="cellphone"></p>
<p class="text-center fr">And cellphone:</p>
<p class="text-center ins"><input type="text" name="cellphone" value="號碼只能註冊一次"></p>
 <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
 <input type="hidden" name="username" value="<?php echo $username; ?>">
 <input type="hidden" name="pword" value="<?php echo $pword; ?>">
</form>
<a href="newdata_3.php" onclick="document.getElementById('data1').submit();return false;" ><p class="text-center fr">next-></p></a>
</body>
</html>
