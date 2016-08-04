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

<script type="text/javascript">

    function do_this_all()
    {
    	var checkboxes = document.getElementsByName('userid[]');
        var button = document.getElementById('delall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = 'TRUE';
		}
    }
    function undo_this_all()
    {
    	var checkboxes = document.getElementsByName('userid[]');
        var button = document.getElementById('undelall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = '';
		}
    }
</script>
</head>
<body>
	<br>
	<br>
	<div align="center" class="tth">
		<form action="friendlink_back.php" method="post">
<table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' class="tth">
<tr>
	<th>Select</th>
	<th>&nbspNo.&nbsp</th>
	<th>&nbspNick Name&nbsp</th>
	<th>&nbsplocation&nbsp</th>
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
	$conid=$_SESSION["temp_conid"];
	$sql="SELECT `no`, `nickname`, `email`, `phone`, `cellphone`, `location`, `gender` FROM `user_".$conid."` ORDER BY `no`";
	$result=mysql_query($sql);

	while($row=mysql_fetch_array($result)){
	//check if present is change
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"no[]\" value=\"" . $row["no"] . "\"/></td>";
	echo "<td>".$row["no"]."</td>";
	echo "<td>" . $row["nickname"] . "</td>";
	echo "<td>" . $row["location"] . "</td>";
	echo "</tr>";
	
	}
}

//$sql="SELECT `username`,`cellphone` FROM `admin` WHERE 1";
//$result=mysql_query($sql);
?>

</table>
<br>
<input type="hidden" name="conid" value="<?php echo $conid;?>">
<button type="submit" class="ahr">新增聯絡人</button>
</form><br>
<a href="mycontact.php">back to my contact</a>
</div>
</body>
</html>