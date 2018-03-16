<!DOCTYPE html>
<?php
include "connect.php";
session_start();
if(isset($_POST['upload']))
{
    echo "entered";
    $protype=$_POST['ptype'];
    $address1=$_POST['address'];
    $range1=$_POST['range'];
    $qry1="INSERT INTO `upload`(`ptype`,`address`,`range`) VALUES ('$protype','$address1','$range1');";
    mysqli_query($link,$qry1);
}
?>
<html>
<head></head>
<body>
<p>Property  Type:</p>
<input type="text" name="ptype">
<p>Address:</p>
<textarea row="8" col="4"></textarea>
<p>Range of Price:</p>
<input type="text" name="range">
<button type="submit" name="upload">Upload:</button>
</body>
</html>