
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="employee_reply.css">
</head>
<body>
 <a href="client_portal.php"> <input type="submit"  value="LOGOUT" class="btn" style="margin-left: 1000px; background-color: green;"></a>
</body>
</html>
<?php

include_once 'connection.php';
$sql = "SELECT * FROM yes ";
if(! ($result = mysqli_query($conn, $sql)))
{
  
  echo "Errormessage: ".mysqli_error($conn)."\n";
}
else

{
   
  echo "<h1><center><i><font color=green>ACCEPTED LIST</font></i></center></h1>
    <table border=4 align=center>
    <tr>
<th>Name</th>
    <th>Message</th>
   <th>Other Information</th>
    </tr>";
  while($row = mysqli_fetch_array($result))
  {
    echo "<tr><td>".$row['name']."</td><td>".$row['message']."</td><td>".$row['anyinfo']."</td></tr>";
  }
  echo "</table>";
}

?>
<?php

include_once 'connection.php';
$sql = "SELECT * FROM no ";
if(! ($result = mysqli_query($conn, $sql)))
{
  
  echo "Errormessage: ".mysqli_error($conn)."\n";
}
else

{
   
  echo "
<h1><center><i><font color=red>REJECTED LIST</font></i></center></h1>
  <table border=4 align=center>
    <tr>
<th>Name</th>
    <th>Reason</th>
    </tr>";
  while($row = mysqli_fetch_array($result))
  {
    echo "<tr><td>".$row['name']."</td><td>".$row['reason']."</td></tr>";
  }
  echo "</table>";
}
mysqli_close($conn);

?>