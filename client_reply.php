<!DOCTYPE html>
<html>
<head>
  <title>manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="manager_reply.css">
</head>
<header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed">
  <!-- Brand -->
  
 <a href="home.html">
    <img width="50" height="50" src="http://csmehulthakkar.com/images/logo_dark.png">
    
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav" style="margin-left: auto;">
    
   <li class="nav-item">
        <a class="nav-link" href="reply.php">LOGOUT</a>
      </li>
  
    </ul>
  </div>
</nav>
</header>
<body>
<center>
  <form action="" method="post" name="RegForm"  onsubmit="return validation()" > <fieldset style="border:1px solid white;">
  <legend align="center" ><i>REPLY TO MANEGER</i></legend><br>
  <label>NAME</label>
  <input type="text" name="name"  pattern="\w+[a-z]"
        required="">
       
  <label >EMAIL</label>
   <input type="email"  name="email"  required="" /><br><br>
    <label>INFO</label>
  <input type="text" name="info" class="mesg"  pattern="\w+[a-z]"
        required=""><br><br>
      <label >MESSAGE</label>
   <input type="text" name="message"class="mesg" required /><br><br>
   <input type="submit" name="submit" value="SEND" class="btn">
 </fieldset>
</form>
</center>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit']))
{
$name=$_POST['name'];

$email=$_POST['email'];
$info=$_POST['info'];
$message=$_POST['message'];


$insertquery="INSERT INTO reply(name, email,info, message) VALUES ('$name','$email','$info','$message')";
 $res=mysqli_query($conn,$insertquery);
 if($res)
 {
  ?>
  <script>
    alert("MESSAGE SENT sucessefully");
  </script>
  <?php
 }
 else
 {
  ?>
  <script>
    alert("data not inserted properly");
  </script>
  <?php
 }

}

?>