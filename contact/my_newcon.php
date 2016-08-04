<?php
include('link.php');
session_start();
if($_SESSION["user"]==NULL){
	$url = "index.php";
  echo "<script type='text/javascript'>";
  echo "window.location.href='$url'";
  echo "</script>";
}
?>
<html>
<head>
	<title>new contacter</title>
	<link rel="stylesheet" href="userstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div align="center" class="tthin">
		<form action="my_newcon_back.php" method="post">
<table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' class="tthin">

<tr>
	<td>&nbspNick Name&nbsp</td>
	<td><input type="text" name="nickname"></td>
</tr>
<tr>
	<td>&nbspphone&nbsp</td>
	<td><input type="text" name="phone"></td>
</tr>
<tr>
	<td>&nbspcellPhone&nbsp</td>
	<td><input type="text" name="cellphone"></td>
</tr>
<tr>
	<td>&nbspE-mail&nbsp</td>
	<td><input type="text" name="email"></td>
</tr>
<tr>
	<td>&nbspgender&nbsp</td>
	<td><input type="radio" name="gender" value="boy">&nbspboy&nbsp
	<input type="radio" name="gender" value="girl">&nbspgirl</td>
</tr>
<tr>
	<td>&nbsplocation&nbsp</td>
	<td><select name="location">
		<option value="none">不知道</option>
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
</select></td>
</tr>

</table>
<br>
<input type="submit" value="submit" class="ahr">
</form>
<br><br><br>
<a href="mycontact.php">back to my contact</a>
</div>

</body>
</html>
