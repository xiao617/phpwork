<?php
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
  <title>find neibor</title>
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
  <th>&nbspNick Name&nbsp</th>
  <th>&nbspcellphone&nbsp</th>
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
  $sql="SELECT `id` FROM `admin` ORDER BY `id`";
  $result=mysql_query($sql);
  $rower=mysql_fetch_array($result);
  $num=count($rower);

  for($i=1;$i<=$num;$i=$i+1){
    $sql="SELECT `no`, `nickname`, `email`, `phone`, `cellphone`, `location`, `gender` FROM `user_".$i."`";
   $result=mysql_query($sql);
//echo $i."<br>";
    while($row=mysql_fetch_array($result)){
  //check if present is change
      if($who[$row["nickname"]]==NULL){
          echo "<tr>";
          echo "<td>" . $row["nickname"] . "</td>";
          echo "<td>" . $row["cellphone"] . "</td>";
          echo "</tr>";  
          $who[$row["nickname"]]=$row["cellphone"];
      }
  
  
  }
  }
  
}

//$sql="SELECT `username`,`cellphone` FROM `admin` WHERE 1";
//$result=mysql_query($sql);
?>

</table>
<br>
<a href="mycontact.php">back to my contact</a>
</div>
</body>
</html>