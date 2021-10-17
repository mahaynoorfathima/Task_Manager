<?php

include("connection.php");
error_reporting(0);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $task = $_REQUEST['task'];
    $submittedby = $_SESSION["username"];
    $ins_query="insert into new_record
    (`trn_date`,`name`,`task`,`submittedby`)values
    ('$trn_date','$name','$task','$submittedby')";
    mysqli_query($conn,$ins_query)
    or die(mysql_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assign New task</title>
<link rel="stylesheet" href="insert.css" />
</head>
<body>
    <center>
<div class="form">
<button ><a href="dashboard.php">TASK ASSIGN CONTROLES</a> </button>
<button> <a href="view.php">View Task Assigned Records</a> </button>
<button> <a href="dashboard.php">Logout</a></button>
<div>
<h1><i>Assign New Task</i></h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name of Employee" required /></p>
<p><input type="text" name="task" placeholder="Enter Task to be assigned" required /></p>
<p><input name="submit" type="submit" style="background-color: blue;" value="ASSIGN" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</center>
</body>
</html>