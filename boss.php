<!DOCTYPE HTML>
<html> 
<head>
	<link rel="stylesheet" type="text/css" href="boss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script>
	function validation() {
		var user = document.forms["RegForm"]["user_id"];
		var name = document.forms["RegForm"]["name"];
		var password = document.forms["RegForm"]["password"];
		var email = document.forms["RegForm"]["email"];
		var phone = document.forms["RegForm"]["phone"];
	
		if (user.value == "") {
			window.alert("Please enter your user_id.");
			user.focus();
			return false;
		}

		if ( name.value == "") {
			window.alert("Please enter your name.");
			 name.focus();
			return false;
		}

		if (password.value == "") {
			window.alert(
			"Please enter a password.");
			password.focus();
			return false;
		}
		if (email.value == "") {
			window.alert("Please enter a valid email id");
			email.focus();
			return false;
		}

		if (phone.value == "") {
			window.alert(
			"Please enter your  number.");
			phone.focus();
			return false;
		}
        else
        {
        	window.alert("Registerd successfully")
        }
		return true;
	}
</script>
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
</head> 
<header>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed">
  <!-- Brand -->
  	
 <a href="home.html">
    <img width="50" height="50" src="http://csmehulthakkar.com/images/logo_dark.png">
  	
  </a>
  <div><h1 style="margin-top: 55px; margin-left: 330px; color:red;"><i> TASK MANAGER</i></h1></div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav" style="margin-left: auto;">
      
      <li class="nav-item">
        <a class="nav-link" href="home.html">LOGOUT</a>
      </li>
          </ul>
  </div>

  <!-- Toggler/collapsibe Button -->
</nav>
</header>
<body>
<center>
	<form action="" method="post" name="RegForm"  onsubmit="return validation()"> <fieldset style="border:solid 2px;">
  <legend  style="color:red; " align="center" >welcome to registration :</legend>
  <label>user_id</label><br>
  <input type="text" name="user_id"  pattern="\w+"
        title="User_id should only contain numbers " ><br><br>
  <label >name</label><br>
  <input type="text" name="name" pattern="[a-z]{1,30}"
        title="Username should only contain lowercase letters. e.g. john"><br><br>
  <label >password</label><br>
   <input type="password" name="password"  title="Password must contain: Minimum 8 characters atleast 1 Alphabet  and 1 Number"
       pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,16}$" /><br><br>
  <label >email</label><br>
   <input type="email" name="email" ><br><br>
  <label >phone</label><br>
  <input type="phone" id="phone" name="phone" pattern="^\d{10}$"><br><br>
  <label><font color="blue">Quilified_as</font></label>

<select  name="qualified_as" style="margin-right: 200px;">
  <option >client</option>  
  <option >Manager</option>
  	<option >Employee</option>
</select><br><br>
   <input type="submit" name="submit" class="btn" value="Register"  style="background-color: red; border: 1px solid blue;">
   <input type="reset" name="reset" class="btn" value="reset" style="margin-left: 5px;background-color: red; border: 1px solid blue;">
   <div class="container signin">
<p>Already have an account? <a href="boss_login.php">Login</a>.</p>
</div>
 </fieldset>
</form>
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
    </footer><!--End footer 2-->
 </center>
</html>

<?php 
include 'connection.php'; // Database connection

if(isset($_POST['submit'])){
  $us = $_POST['user_id'];
  $na = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $qualified_as=$_POST['qualified_as'];

  // Insert record
  $insert_query = "INSERT INTO 
       boss_register(user_id,name,password,email,phone,qualified_as) 
                 VALUES('".$us."','".$na."','".$password."','".$email."','".$phone."','".$qualified_as."')";
  mysqli_query($conn,$insert_query);

  // Redirect to another page
  header('location: home.html');
}

?>

