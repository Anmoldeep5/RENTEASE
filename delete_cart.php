<?php
include "mpdb.php";
$id=mysqli_real_escape_string($con,$_GET['id']);
$qry="DELETE FROM cart where id='$id'";
if(mysqli_query($con,$qry))
{
    echo "<script>alert('Removed !');
    window.location.href='cart.php';
    </script>";
}
else
{
    echo mysqli_error($con);
}
?>
