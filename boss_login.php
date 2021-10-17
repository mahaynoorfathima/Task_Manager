<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="boss_login.css">
  <script>
  function validation() {
    var name = document.forms["RegForm"]["name"];
    var user = document.forms["RegForm"]["user_id"];
    var password = document.forms["RegForm"]["password"];
  
    if (name.value == "") {
      window.alert("Please enter your name.");
      name.focus();
      return false;
    }
    if (user.value == "") {
      window.alert("Please enter your user_id.");
      user.focus();
      return false;
    }


    if (password.value == "") {
      window.alert(
      "Please enter a password.");
      password.focus();
      return false;
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
<body>
 
   <a href="home.html"> <input type="submit"  value="LOGOUT" class="btn" style="margin-left: 1000px;"></a>
    <h1 style=" margin-left: 400px; color:red;"><i> TASK MANAGER</i></h1>
<center>
	<form action="" method="post" name="RegForm"  onsubmit="return validation()" > <fieldset style="margin-top: 5%; margin-bottom: 5%;">
  <legend align="center" >welcome to login:</legend>
  <label>username</label><br>
  <input type="text" name="name"  pattern="\w+[a-z]"
        title="User_id should only contain numbers " ><br><br>
  <label>user_id</label><br>
  <input type="text" name="user_id"  pattern="\w+"
        title="User_id should only contain numbers " ><br><br>
  <label >password</label><br>
   <input type="password" name="password"  title="Password must contain: Minimum 8 characters atleast 1 Alphabet  and 1 Number"
     pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,16}$" /><br><br>
   <input type="submit" name="submit" value="LOGIN" class="btn">
  
 </fieldset>
</form>
</center>
</body>
<footer class="footer-expand-sm">
    <center>
        <div class="container text-left">
           <p style="margin-left: 6%;">YOU CAN CONECT WITH US THROUGH.</p>
           <a href="#" class="fa fa-facebook" style="margin-left: 7%;"></a>  
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
</html>
<?php
session_start();
include_once 'connection.php';

 if(isset($_POST['submit']))
{
   $name=$_POST['name'];
  $user_id=$_POST['user_id'];
  $password=$_POST['password'];
  $res=mysqli_query($conn,"SELECT * FROM boss_register WHERE  user_id='$user_id' && name='$name'");
  $row=mysqli_fetch_array($res);
  if($row['password']==$password && $row['user_id']==$user_id)
  {
    // $_SESSION['user_id']=$row['user_id'];
      echo "<script>alert('LOGIN');</script>";
      $_SESSION['name']=$name;
       header("Location: boss_portal.php");
  }

  else
  {
    echo "<script>alert('wrong username or wrong password or wrong qualification');</script>";    
  }
}
mysqli_close($conn);
?>