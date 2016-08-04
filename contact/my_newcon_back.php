<?php
include('link.php');
session_start();
if($_SESSION["user"]==NULL){
	$url = "index.php";
  echo "<script type='text/javascript'>";
  echo "window.location.href='$url'";
  echo "</script>";
}
$id=$_SESSION["id"];
//echo $id."<br>";
$nickname=$_POST['nickname'];
$phone=$_POST['phone'];
$cellphone=$_POST['cellphone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$location=$_POST['location'];

$sql="SELECT `id` FROM `admin` WHERE `cellphone`='".$cellphone."'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
	$present=$row['id'];
}
//echo $present;
$sql="SELECT `no` FROM `user_".$id."` WHERE 1";
$result=mysql_query($sql);
$no=0;
while($res=mysql_fetch_array($result)){
	if($no<$res['no']) $no=$res['no'];
}
$no=$no+1;
$sql="INSERT INTO `user_".$id."`(`no`, `nickname`, `email`, `phone`, `cellphone`, `location`, `gender`,`present`) 
VALUES ('{$no}','{$nickname}','{$email}','{$phone}','{$cellphone}','{$location}','{$gender}','{$present}')";
$result=mysql_query($sql);
?>


<html>
<head>
	<meta http-equiv="refresh" content="0;url=my_newcon.php">
</head>
<body>
</body>
</html>