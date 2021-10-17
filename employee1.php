<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="manager.css">
  <script>
  function validation() {
    var user = document.forms["RegForm"]["user_id"];
    var password = document.forms["RegForm"]["password"];
  
    if (user.value == "") {
      window.alert("Please enter your user_id.");
      user.focus();
      return false;
    }

    if(user.value !="878")
    {
       window.alert("Please enter valid user_id.");
      user.focus();
      return false;
    }
    if (password.value == "") {
      window.alert(
      "Please enter a password.");
      password.focus();
      return false;
    }
      if (password.value != "2019-20") {
      window.alert(
      "Please enter valid password.");
      password.focus();
      return false;
    } 
  else
  {
    window.location.href="employee_portal.php";
  }  
    return true;
  }
</script>
</head>
<body>
<center>
  <form action="employee_portal.php" method="post" name="RegForm"  onsubmit="return validation()" > <fieldset>
  <legend align="center" >welcome to Employee-login:</legend>
  <label>Employee_id</label><br>
  <input type="text" name="user_id"  pattern="\w+"
        title="User_id should only contain numbers " ><br><br>
  <label >password</label><br>
   <input type="password" name="password"   /><br><br>
   <input type="submit" name="submit" value="LOGIN" class="btn">
 </fieldset>
</form>
</center>
</body>
</html>
