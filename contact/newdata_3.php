<?php
include('link.php');

session_start();
if($_SESSION["create"]==2){
	$_SESSION["create"]=3;
	$nickname=$_POST['nickname'];
	$username=$_POST['username'];
	$pword=$_POST['pword'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$cellphone=$_POST['cellphone'];
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
<form method="post" action="newdata_4.php" id="data1">
<p class="text-center fr">You are a boy or a girl?</p>
<p class="text-center ins"><input type="radio" name="gender" value="boy">&nbspboy&nbsp
	<input type="radio" name="gender" value="girl">&nbspgirl</p>
<p class="text-center fr">What's your address?</p>
<p class="text-center ins">
<select name="location">
<option value="taipei_city">臺北市</option>
<option value="new_taipei_city">新北市</option>
<option value="keelung_city">基隆市</option>
<option value="yeeland_country">宜蘭縣</option>
<option value="hsinchu_city">新竹市</option>
<option value="hsinchu_country">新竹縣</option>
<option value="tauwung_city">桃園市</option>
<option value="hoawli_country">苗栗縣</option>
<option value="taichun_city">臺中市</option>
<option value="chunwauy_country">彰化縣</option>
<option value="natoyo_country">南投縣</option>
<option value="chiyee_city">嘉義市</option>
<option value="chiyee_country">嘉義縣</option>
<option value="wenlin_city">雲林縣</option>
<option value="tainan_city">臺南市</option>
<option value="koshum_city">高雄市</option>
<option value="panwoo_country">澎湖縣</option>
<option value="keydoor_country">金門縣</option>
<option value="peitung_country">屏東縣</option>
<option value="taitung_country">臺東縣</option>
<option value="hawlun_country">花蓮縣</option>
<option value="withriver_country">連江縣</option>
<option value="nahi_island">南海島</option>
</select>
<input type="text" name="address"></p>
 <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
 <input type="hidden" name="username" value="<?php echo $username; ?>">
 <input type="hidden" name="pword" value="<?php echo $pword; ?>">
  <input type="hidden" name="phone" value="<?php echo $phone; ?>">
 <input type="hidden" name="cellphone" value="<?php echo $cellphone; ?>">
   <input type="hidden" name="email" value="<?php echo $email; ?>">
</form>
<a href="newdata_4.php" onclick="document.getElementById('data1').submit();return false;" ><p class="text-center fr">next-></p></a>
</body>
</html>
