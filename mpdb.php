<?php
$con=mysqli_connect("localhost","root","","dbproject");
if($con==true)
{
    echo "file connected";
}
else
{
    echo "file not connected";
}
?>