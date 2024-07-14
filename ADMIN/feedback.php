<?php include "adminheader.php" ?>
<div class="container">
    <h2 class="text-center my-2 text-decoration-underline"><span class="text-primary"><i class="fa-user fa-solid me-3"></i>User feedback</span></h2>
<table class="table mt-3">
    <tr>
    <th>Sno</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone number</th>
    <th>Comment</th>
    <th>Date</th>
    <th>Action</th>
    </tr>

<?php
$c=1;
$qry="select * from dbcontactpage";
$run=mysqli_query($con,$qry);
while($data=mysqli_fetch_array($run))
{
    echo "<tr>
    <td>".$c."</td>
    <td>".$data['name']."</td>
    <td>".$data['email']."</td>
    <td>".$data['phonenumber']."</td>
    <td>".$data['comment']."</td>
    <td>".$data['currentdate']."</td>
    <td><a href='delete_feedback.php?id=".$data['id']."'><i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    $c++;
}
?>
</table>
</div>