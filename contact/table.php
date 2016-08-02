<html>
<title></title>
<head>
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
<form action="deleteData.php" method="post">
<table border="1">
<tr>
	<th>Select</th>
	<th>User Name</th>
	<th>User Birthday</th>
	<th>User Phone</th>
	<th>User E-mail</th>
	<th>Update</th>
</tr>

<?php
include('linkdb.php');

//echo $adminuser."<br>";
//echo $adminpass."<br>";
//echo $adminpri."<br>";

//$getCountSQL = "SELECT COUNT(*) FROM `user`";
//$resultCount = mysql_query($getCountSQL);
//$getCount = mysql_fetch_assoc($resultCount);
//$allDataNo = $getCount["COUNT(*)"];

$getIDSQL = "SELECT * FROM `users` ORDER BY `users`.`no` ASC";
$result = mysql_query($getIDSQL);

while( $row = mysql_fetch_assoc($result) )
{
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"userid[]\" value=\"" . $row["userid"] . "\"/></td>";
	echo "<td>" . $row["username"] . "</td>";
	echo "<td>" . $row["userbirth"] . "</td>";
	echo "<td>" . $row["userphone"] . "</td>";
	echo "<td>" . $row["useremail"] . "</td>";
	echo "<td><a href=\"./updateData.php?userid=" . $row["userid"] . "\">update</a></td>"; 
	echo "</tr>";
	
}

mysql_close($link);
?>

</table>
<button type="submit">Delete</button>
<input type="button" id="delall" value="selectAll" onClick="do_this_all()" />
<input type="button" id="undelall" value="unchecked" onClick="undo_this_all()" />
</form>

</body>
</html>