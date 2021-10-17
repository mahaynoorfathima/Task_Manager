<!DOCTYPE html>
<html>
<head>
	<title>Client</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="boss_portal.css">
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
  <script>
	function validation() {
		
		var name = document.forms["RegForm"]["name"];
		var email = document.forms["RegForm"]["email"];
		var phone = document.forms["RegForm"]["phone"];
		var purpose = document.forms["RegForm"]["purs"];
		var requirements = document.forms["RegForm"]["req"];
		var messag = document.forms["RegForm"]["messag"];

	

		if ( name.value == "") {
			window.alert("Please enter your name.");
			 name.focus();
			return false;
		}

	
		
		else if (email.value == "") {
			window.alert("Please enter a valid email id");
			email.focus();
			return false;
		}

		else if (phone.value == "") {
			window.alert(
			"Please enter your  number.");
			phone.focus();
			return false;
		}
		else if (purpose.value == "") {
			window.alert(
			"Please enter your  number.");
			purpose.focus();
			return false;
		}
		else if (requirements.value == "") {
			window.alert(
			"Please enter your  number.");
			requirements.focus();
			return false;
		}
		else if (messag.value == "") {
			window.alert(
			"Please enter your  number.");
			messag.focus();
			return false;
		}
        else
        {
        	window.alert("Registerd successfully");
        	
        }
        return true;
		}
	
</script>
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
        <a class="nav-link" href="#">Requirements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reply.php">Reply</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="update.php">Detials</a>
      </li>
  
    </ul>
  </div>
</nav>
</header>
<body>
	<center>
<h1><i><u>Please Enter The Detials</u></i></h1>
<table border="2" style="margin-bottom: 5%;">
	<form action="" method="POST" name="RegForm"  >
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" pattern="[a-zA-Z]*" required="" ></td>
		<td>Email</td>
		<td><input type="email" name="email" required=""></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="number" name="phone" pattern="^\d{10}$" required=""></td>
		<td>Purpose</td>
		<td><input type="text" name="purs" pattern="[a-zA-Z]*" required=""></td>
	</tr><br>
	<tr >
		<td>Requirements</td>
		<td colspan="3"><input type="text" class="het"  name="req" required=""></td>
	</tr><br>
	<tr>
		<td colspan="4"><input type="Submit" class="ret"style="background-color: green;" name="submit"onclick="validation();"></td>	
	</tr>
</form>
</table>
</center>
</body>
  <footer class="footer-expand-sm">
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
<?php
include "connection.php";

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$purs=$_POST['purs'];
$req=$_POST['req'];

$insertquery="INSERT INTO client1(name,email, phone, purpose, requirments)
 VALUES ('$name','$email','$phone','$purs','$req')";
 $res=mysqli_query($conn,$insertquery);
 if($res)
 {
 	?>
 	<script>
 		alert("REQUIREMENTS SUBMITTED sucessefully");
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