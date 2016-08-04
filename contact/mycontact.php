<html>
<head>
	<title>mycontact</title>
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
	<div align="center" class="tth">
<table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' class="tth">
<tr>
	<th>&nbspNo.&nbsp</th>
	<th>&nbspNick Name&nbsp</th>
	<th>&nbspphone&nbsp</th>
	<th>&nbspcellPhone&nbsp</th>
	<th>&nbspE-mail&nbsp</th>
	<th>&nbspgender&nbsp</th>
	<th>&nbsplocation&nbsp</th>
	<th>&nbspcheck up&nbsp</th>
</tr>
<?php
include('link.php');
session_start();
if($_SESSION["user"]==NULL){
	$url = "index.php";
  echo "<script type='text/javascript'>";
  echo "window.location.href='$url'";
  echo "</script>";
}
else{
	$id=$_SESSION["id"];
	$sql="SELECT `no`, `nickname`, `email`, `phone`, `cellphone`, `location`, `gender` FROM `user_".$id."` ORDER BY `no`";
	$result=mysql_query($sql);

	while($row=mysql_fetch_array($result)){
	//check if present is change
	$present=$row["present"];
	$location=$row["location"];
		$sqlrr="SELECT `id`,`location` FROM `admin` WHERE `cellphone`='".$row["cellphone"]."'";
		$resultrr=mysql_query($sqlrr);
		while($rowr=mysql_fetch_array($resultrr)){
			$present=$rowr['id'];
			$location=$rowr['location'];
		}
		$sqlkk="UPDATE `user_".$id."` SET `present`='".$present."',`location`='".$location."'";
		$resultk=mysql_query($sqlkk);
	echo "<tr>";
	echo "<td>".$row["no"]."</td>";
	echo "<td>" . $row["nickname"] . "</td>";
	echo "<td>" . $row["phone"] . "</td>";
	echo "<td>" . $row["cellphone"] . "</td>";
	echo "<td>" . $row["email"] . "</td>";
	echo "<td>" . $row["gender"] . "</td>";
	echo "<td>" . $location . "</td>";
	if($present>=1){
		echo "<td><a href=\"./friendlink.php?conid=" .$present. "\">see-></a></td>";
		$_SESSION["temp_conid"]=$present;
	}
	else{
		echo "<td></td>";
	}
	echo "</tr>";
	
	}
}

//$sql="SELECT `username`,`cellphone` FROM `admin` WHERE 1";
//$result=mysql_query($sql);
?>

</table>
<a href="my_newcon.php" class="ahr">新增聯絡人</a>
<a href="index_loginaf.php" class="ahr">回首頁</a>
</div>
</body>
</html>