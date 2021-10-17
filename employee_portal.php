<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="employee_portal.css">
</head>
<body>
 <a href="home.html"> <input type="submit"  value="LOGOUT" class="btn" style="margin-left: 1000px; background-color: skyblue;"></a>
</body>
</html>
<?php

include_once 'connection.php';
$sql = "SELECT * FROM new_record ";
if(! ($result = mysqli_query($conn, $sql)))
{
  
  echo "Errormessage: ".mysqli_error($conn)."\n";
}
else

{
   
  echo "
<h1><i><center>TASK NOTIFICATION</center></i></h1>
  <table border=4 align=center>
    <tr>
<th>Name</th>
    <th>Task</th>
    <a href=employee.php><th>if you accept the task</th></a>
   <a href=employee.php> <th>if you reject the task</th></a>

    </tr>";
  while($row = mysqli_fetch_array($result))
  {
    echo "<tr><td>".$row['name']."</td><td>".$row['task']."</td><td><a href=yes.php><button style=background-color:green; >YES</button></a></td><td><a href=no.php><button style=background-color:skyblue;>NO</button></td></a></tr>";
  }
  echo "</table>";
}
mysqli_close($conn);

?>