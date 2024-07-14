<?php
include "../mpdb.php";
$id=mysqli_real_escape_string($con,$_GET['id']);
$qry="DELETE FROM addproduct where id='$id'";
if(mysqli_query($con,$qry))
{
    echo "<script>alert('Deleted!')
    window.location.href='viewproducts.php';
    </script>";
}
else
{
    echo mysqli_error($con);
}
?>