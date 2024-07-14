<?php
include "adminheader.php"
?>
<div class="container">
    <h2 class="text-center my-2 text-decoration-underline"><span class="text-primary"><i class="fa-brands fa-blogger-b me-3"></i>BloGs</span></h2>
<table class="table mt-3">
    <tr>
        <th>Sno</th>
        <th>Title</th>
        <th>Submit</th>
        <th>Picture</th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
<?php
$c=1;
$qry="select * from addblogs";
$run=mysqli_query($con,$qry);
while($data=mysqli_fetch_array($run))
{
    echo "<tr>
    <td>".$c."</td>
    <td>".$data['title']."</td>
    <td>".$data['submit']."</td>
    <td><img src='blogpic/".$data['picture']."' width='100px'></td>
    <td>".$data['description']."</td>
    <td>".$data['currentdate']."</td>
    <td><a href='delete_viewblogs.php?id=".$data['id']."'<i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    $c++;
}
?>
</table>
</div>