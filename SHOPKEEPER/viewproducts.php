<?php
include "../ADMIN/adminheader.php";
?>
<div class="container">
    <table class="table">
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Price</th>
            <th>Security</th>
            <th>Size</th>
            <th>Information</th>
            <th>Image</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        $c=1;
        $qry="select * from addproduct";
        $run=mysqli_query($con,$qry);
        while($data=mysqli_fetch_array($run))
        {
            echo"
            <tr>
            <td>".$c."</td>           
            <td>".$data['name']."</td>           
            <td>".$data['price']."</td>           
            <td>".$data['security']."</td>           
            <td>".$data['size']."</td>           
            <td>".$data['information']."</td>           
            <td><img src='../SHOPKEEPER/productpic/".$data['picture']."' width='100px'</td>
            <td>".$data['currentdate']."</td>
            <td><a href='delete_product.php?id=".$data['id']."'<button class='btn btn-dark'><i class='fa-solid fa-trash me-2'></i>Delete</button></a></td>           
            </tr>";
            $c++;
        }
        ?>
    </table>
</div>