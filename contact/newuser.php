<!DOCTYPE html>
<?php 
session_start();
if($_SESSION["create"]==NULL){
	$_SESSION["create"]=0;
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
	<title>creat new user</title>
	<link rel="stylesheet" href="userstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<p class="text-center"><br><strong>H&nbspE&nbspL&nbspL&nbspO</strong></p>
<p class="text-center cd">what's your name?</p>
<p class="text-center"></p>
<form method="post" action="newdata_1.php" id="inname">
	<p class="text-center fr"><input type="text" name="nickname"></p>
</form>
<a href="newdata_1.php" onclick="document.getElementById('inname').submit();return false;" ><p class="text-center fr">enter</p></a>
</body>
</html>