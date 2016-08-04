<?php
include('link.php');

session_start();
if($_SESSION["create"]==4){
	$_SESSION["create"]=NULL;
	$sql="SELECT `id`,`cellphone`,`username` FROM `admin` WHERE 1";
	$result=mysql_query($sql);
	$cellphone=$_POST['cellphone'];
	$username=$_POST['username'];
	$id=0;
	$creat_success=0;
	while($res=mysql_fetch_array($result)){
		if($id<$res['id']) $id=$res['id'];
		if($cellphone==$res['cellphone']) $creat_success=1;
		if($username==$res['username']) $creat_success=2;
	}
if($creat_success==0){
	$id=$id+1;
	$nickname=$_POST['nickname'];

	$pword=$_POST['pword'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	$gender=$_POST['gender'];
	$location=$_POST['location'];
	$address=$_POST['address'];
	$text=$_POST['notes'];
	$sql="INSERT INTO `admin`(`id`, `nickname`, `username`, `pword`, `email`, `phone`, `cellphone`, `location`, `gender`, `address`,`notes`) VALUES ('{$id}','{$nickname}','{$username}','{$pword}','{$email}','{$phone}','{$cellphone}','{$location}','{$gender}','{$address}','{$text}')";
	$result=mysql_query($sql);	

	$sql="CREATE TABLE user_".$id."(no INT(10) PRIMARY KEY,nickname VARCHAR(30),email VARCHAR(50),location VARCHAR(100),cellphone VARCHAR(10),phone VARCHAR(15),present INT(20),gender VARCHAR(5))";

	$result=mysql_query($sql);	
}
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
	<meta http-equiv="refresh" content="0;url=index.php">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>
	var x=<?php echo $creat_success; ?>;
	if(x==0) alert("新增帳號成功，請重新登入");
	else if(x==1) alert("手機號碼已註冊，勿重複註冊");
	else if(x==2) alert("此username已註冊");
	</script>
</head>
<body>
</body>
</html>