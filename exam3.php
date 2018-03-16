<!DOCTYPE html>
<?php
include "connect.php";
include "register.php";
?>
<html>
    <head><link rel="stylesheet" href="exam3.css">
        <script src="exam3.js">
            
            </script>
    </head>
    <body>
       <h1>SELL YOUR PROPERTY HERE!</h1>
        <div class="a">
        <form method="post" action="">
            <p>First Name:</p>
            <input type="text" name="first" id="first">
            <p>Last Name:</p>
            <input type="text" name="last" id="last">
            <p>Username:</p>
            <input type="text" name="user" id="user">
            <p>Email:</p>
            <input type="text" name="email" id="email">
            <p>Password:</p>
            <input type="password" name="pass" id="pass">
            </p>Confirm Password:</p>
            <input type="password" name="conpass" id="conpass"></br><br>
            <button type="submit" name="sub" id="register" onclick="register()" >Register</button>
        </form>
    </div>
    </body>
</html>