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
$type=0;
while($row=mysql_fetch_assoc($result)){
	$userpass[$row['username']]=$row['pword'];
}

if(! $_POST['username'] || ! $_POST['pword']){
	$url = "index.html";
	if(!$_POST['username']){
		//echo "您沒有輸入帳號";
		$url = "index.php";
		$type=1;
	}
	else{
		//echo "您沒有輸入密碼";
		$url = "index.php";
		$type=2;
	}
}
else{
	$username=$_POST['username'];
	$pword=$_POST['pword'];

	if($userpass[$username]==$pword){
		
		$url = "index_loginaf.php";
		session_start();
		$_SESSION["user"]=$_POST['username'];
		$sql="SELECT `id`,`username` FROM `admin` WHERE 1";
		$result=mysql_query($sql);
	
		while($res=mysql_fetch_array($result)){
			if($_POST['username']==$res['username']){
				$_SESSION["id"]=$res['id'];
			}
		}		//echo "網頁即將跳轉";
		$type=3;
	}
	else{
		$url = "index.php";
		//echo "帳號密碼錯誤，請重新輸入";
		$type=4;
	}
}
echo "網頁即將跳轉";
?>
<html>
<head>
	<meta http-equiv="refresh" content="1;url=<?php echo $url; ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>
	var x=<?php echo $type;?>;
	if(x==1)	alert('您沒有輸入帳號');
	else if(x==2) alert('您沒有輸入密碼');
	else if(x==3) alert('登入成功');
	else if(x==4) alert('帳號密碼錯誤，請重新輸入');
	
	</script>
</head>
<body>
</body>
</html>