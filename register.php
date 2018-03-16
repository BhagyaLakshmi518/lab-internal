
<?php
session_start();
if(isset($_POST['sub']))
{
   // echo "entered";
    $firstname=$_POST['first'];
    $lastname=$_POST['last'];
    $username=$_POST['user'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $conpass=$_POST['conpass'];
    if($pass!=$conpass)
    {
         $msg="passwords doesn't match";
         echo $msg.mysqli_error();
    }
    $abc="INSERT INTO `exam3` (`firstname`,`lastname`,`email`,`password`) VALUES ('$firstname','$lastname','$email','$pass');";
    mysqli_query($link,$abc);
    $qry="SELECT $username $pass FROM `exam3` WHERE $username=`username` $pass=`password`";
    $values=mysqli_query($link,$qry);
    if($values)
    {
        echo "username already exists!".mysqli_error();
    }
}
    ?>