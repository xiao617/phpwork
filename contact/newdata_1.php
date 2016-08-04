<?php
include('link.php');
session_start();
if($_SESSION["create"]==0){
	$_SESSION["create"]=1;
	$nickname=$_POST['nickname'];
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
<p class="text-center">Nice&nbspto&nbspmeet&nbspyou&nbsp<?php echo $nickname;?></p>
<br>
<form method="post" action="newdata_2.php" id="data1">
<p class="text-center fr">Please input your username:</p>
<p class="text-center ins"><input type="text" name="username"></p>
<p class="text-center fr">And your password:</p>
<p class="text-center ins"><input type="password" name="pword"></p>
 <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
</form>
<a href="newdata_2.php" onclick="document.getElementById('data1').submit();return false;" ><p class="text-center fr">next-></p></a>
</body>
</html>