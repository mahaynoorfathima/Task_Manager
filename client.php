<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="client.css">
  <script>
  function validation() {
    var user = document.forms["RegForm"]["user_id"];
    var password = document.forms["RegForm"]["password"];
  
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
</head>
<body>
<center>
  <form action="" method="post" name="RegForm"  onsubmit="return validation()" > <fieldset>
  <legend align="center" >welcome to login:</legend>
  <label>Manager_id</label><br>
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
</html>
<?php
session_start();
include_once 'connection.php';

 if(isset($_POST['submit']))
{
  
  $user_id=$_POST['user_id'];
  $password=$_POST['password'];
  $res=mysqli_query($conn,"SELECT * FROM boss_register WHERE  user_id='$user_id'");
  $row=mysqli_fetch_array($res);
  if($row['password']==$password && $row['user_id']==$user_id)
  {
    // $_SESSION['user_id']=$row['user_id'];
      echo "<script>alert('LOGIN');</script>";
       header("Location: client_portal.php");
  }

  else
  {
    echo "<script>alert('wrong username or wrong password');</script>";    
  }
}
mysqli_close($conn);
?>