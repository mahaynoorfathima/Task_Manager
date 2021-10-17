<?php

include_once 'connection.php';
if(isset($_POST['submit']))
{
   
$sql = "SELECT * FROM yes ";
if(! ($result = mysqli_query($conn, $sql)))
{
  
  echo "Errormessage: ".mysqli_error($conn)."\n";
}
else

{
   
  echo "<h1><center><i>ACCEPTED LIST</i></center></h1>
    <table border=4 align=center>
    <tr>
<th>Name</th>
    <th>Message</th>
   <th>Other Information</th>
    </tr>";
  while($row = mysqli_fetch_array($result))
  {
    echo "<tr><td>".$row['name']."</td>,<td>".$row['message']."</td>,<td>".$row['anyinfo']."</td></tr>";
  }
  echo "</table>";


}
}
mysqli_close($conn);


?>