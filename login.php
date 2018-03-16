<!DOCTYPE html>
<?php
include "connect.php";
if(isset($_POST['log']))
{
    header('location:upload.php');
}
?>
<html>
<head></head>
<body>
<div class="a">
<form>
<p>username:</p>
<input type="text" name="un">
<p>Password:</p>
<input type="password" name="lp">
<button name="log">Login</button>
</form>
</div>
</body>
</html>