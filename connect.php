<?php
$localhost="localhost";
$username="root";
$password="";
$db="internal";
$link=mysqli_connect($localhost,$username,"",$db);
if(mysqli_connect_errno()>0)
{
    echo "error in connection".mysqli_connect_error();
}
else
     echo "connection successful";
?>