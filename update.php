<!DOCTYPE html>
<html>
<head>
	<title>detials</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
  <style type="text/css">
    footer {
  text-align: center;
  padding: 3px;
  background-color: #343a40!important;
  color: white;
}
.fa {  
  padding: 10px;  
margin:5px 2px;
  
  font-size: 30px;  
  width: 50px;  
}  
.fa-facebook {  
  background: #3B5998;  
  color: white;  
}  
.fa-twitter {  
  background: #55ACEE;  
  color: white;  
}  
.fa-pinterest {  
  background: #cb2027;  
  color: white;  
}  
.fa-linkedin {  
  background: #007bb5;  
  color: white;  
}  
.fa-instagram {  
  background: green;  
  color: green;  
}  
.fa-youtube {  
  background: #bb0000;  
  color: white;  
}  
.fa-google {  
  background: #dd4b39;  
  color: white;  
}  
.fa-snapchat-ghost {  
  background: #fffc00;  
  color: white;  
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;  
}  
.fa-skype {  
  background: #00aff0;  
  color: white;  
}  
.fa:hover {  
    opacity: 0.9;  
}  
  </style>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" type="text/css" href="update.css">
</head>
<header>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed">
  <!-- Brand -->
  	<font color="gray"><?php echo include "name.php" ?></font>
 <a href="home.html">
    <img width="50" height="50" src="http://csmehulthakkar.com/images/logo_dark.png">
  	
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      <li class="nav-item"style="margin-left: 620px;">
        <a class="nav-link" href="boss_portal.php">Requirements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reply.php">Reply</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Detials</a>
      </li>
          </ul>
  </div>
</nav>
</header>
<body>
<center>
	<form action="" method="post" name="RegForm"   >  
  <label><i>ENTER USERNAME</i></label><br>
  <input style="border-color: skyblue;border-radius: 10px;" type="text" name="name" placeholder="entert yor name" pattern="\w+[a-z]"
        title="User_id should only contain numbers "class="btn" >
   <input type="submit" name="submit" value="DETAILS" >
<br><br><br><br>
</form>
</center>
</body>
</html>
<?php

include_once 'connection.php';
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
$sql = "SELECT * FROM client1 WHERE  name='$name'";
if(! ($result = mysqli_query($conn, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
else

{
   
	echo "<table border=4 align=center>
		<tr><th>NAME</th>
		<th>EMAIL</th>
		<th>PHONE</th>
<th>PURPOSE</th>
<th>REQUIREMENTS</th>
		</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['purpose']."</td><td>".$row['requirments']."</td></tr>";
	}
	echo "</table>";

}
}
mysqli_close($conn);


?>
<html>

 <footer class="footer-expand-sm fixed" style="margin-top: 11%;">
    <center>
        <div class="container text-left">
           <p style="margin-left: 290px;">YOU CAN CONECT WITH US THROUGH.</p>
           <a href="#" class="fa fa-facebook" style="margin-left: 200px;"></a>  
<a href="#" class="fa fa-twitter"></a>  
<a href="#" class="fa fa-github" style="background-color: white; color:black;"></a>  
<a href="https://www.linkedin.com/in/mahay-7627a01b1" class="fa fa-linkedin"></a>  
<a href="https://mahaynoorf@gmail.com" class="fa fa-whatsapp" style="background-color: white; color:green;"></a>  
<a href="#" class="fa fa-youtube"></a>  
<a href="https://google.com" class="fa fa-google"></a>  
<a href="#" class="fa fa-snapchat-ghost"></a>  
<a href="#" class="fa fa-skype"></a>  
        </div><!--End container-->
    </footer>
</html>