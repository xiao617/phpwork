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
	$con_id=$_SESSION["temp_conid"];
	$nonum=$_POST["no"];
	$num= count($nonum);
	
	while ($num>0) {
		$no=$nonum[$num-1];
		//echo "77777";
		
		$sql="SELECT `no`, `nickname`, `email`, `phone`, `cellphone`, `location`, `gender`,`present` FROM `user_".$con_id."` WHERE `no`='".$no."' ORDER BY `no`";
		$result=mysql_query($sql);
		//echo "6666";
		
		while($row=mysql_fetch_array($result)){
			
			$nickname=$row['nickname'];
			$phone=$row['phone'];
			$cellphone=$row['cellphone'];
			$email=$row['email'];
			$gender=$row['gender'];
			$location=$row['location'];
			$present=$row['present'];
			//echo $nickname;
			
			//echo "444";
		}
		
		$sqlr="SELECT `no`,`cellphone` FROM `user_".$id."` WHERE 1";
		$resultr=mysql_query($sqlr);
		$newno=0;
		$creat=0;
		while($res=mysql_fetch_array($resultr)){
			if($cellphone==$res['cellphone']) $creat=1;
			if($newno<$res['no']) $newno=$res['no'];
		}
		$newno=$newno+1;
		if($creat==0){
		$sqlk="INSERT INTO `user_".$id."`(`no`, `nickname`, `email`, `phone`, `cellphone`, `location`, `gender`,`present`) 
			VALUES ('{$newno}','{$nickname}','{$email}','{$phone}','{$cellphone}','{$location}','{$gender}','{$present}')";
		$resultk=mysql_query($sqlk);	
		}
		

		$num=$num-1;
	}
}
?>
<html>
<head>
	<meta http-equiv="refresh" content="0;url=mycontact.php">

</head>
<body>
</body>
</html>