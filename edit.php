<?php
error_reporting(0);
include("connection.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="edit.css" />
</head>
<body>
	<center>
<div class="form">
<button><a href="dashboard.php">TASK ASSIGN CONTROLES</a> </button>
<button><a href="view.php">View Task Assigned Records</a> </button>
<button><a href="dashboard.php">Logout</a></button>
<h1><i>Update Record</i></h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$task =$_REQUEST['age'];
$submittedby = $_SESSION["username"];
$update="update new_record set trn_date='".$trn_date."',
name='".$name."', task='".$task."',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name Of The Employee" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter The task Info" 
required value="<?php echo $row['task'];?>" /></p>
<p><input name="submit" class="mss" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</center>
</body>
</html>