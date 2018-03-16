<!DOCTYPE html>
<?php
session_start();
if(isset($_POST['reg']))
{
  //  echo "entered";
    header('location:exam3.php');
}
if(isset($_POST['login']))
{
    header('location:login.php');
}
?>
<html>
<head><link rel="stylesheet" href="home.css"></head>
<body>
<form method="post" >
<button type="submit" name="reg">register</button>
<button type="submit" name="login">login</button>
</form>
</body>
</html>