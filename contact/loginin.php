<html>
<head>
	<link rel="stylesheet" href="styleindex.css">
</head>
<body>
	<div>

  <p class="text-center">
<img src="img/network6.png" height="90%" width="90%">
</p>

</div>
</body>
</html>
<?php
include('link.php');
$getIDSQL = "SELECT `username`,`pword`FROM `admin` ORDER BY `id` ASC";
$result = mysql_query($getIDSQL);

while($row=mysql_fetch_assoc($result)){
	$userpass[$row['username']]=$row['pword'];
}

if(! $_POST['username'] || ! $_POST['pword']){
	$url = "http://localhost:8888/contact/index.html";
	if(!$_POST['username']){
		echo "您沒有輸入帳號";
	}
	else{
		echo "您沒有輸入密碼";
	}
}
else{
	$username=$_POST['username'];
	$pword=$_POST['pword'];

	if($userpass[$username]==$pword){
		
		$url = "http://localhost:8888/contact/index_loginaf.html";
		echo "網頁即將跳轉";
		
	}
	else{
		$url = "http://localhost:8888/contact/index.html";
		echo "帳號密碼錯誤，請重新輸入";
	}
}

?>
<html>
<head>
	<meta http-equiv="refresh" content="3;url=<?php echo $url; ?>">
</head>
<body>
</body>
</html>