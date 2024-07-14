<?php 
include "header.php";
?>
<!-- photo -->
<div class="widebg1 my-5">
      <div class="row">
        <div class="col-md-6 col-sm-12"></div>
        <div class="col-md-6 col-sm-12">
          <h1 class="contect1">Cart</h1>
          <p class="contect2">
          <a href="index.php" class="text-decoration-none fw-bold"> Home</a><span class="text-danger">/</span><a href="#products" class="text-decoration-none fw-bold">cart</a>
          </p>
         
        </div>
      </div>
    </div>
    <!-- /photo -->
    <div >
        <tr>
            <table class="table">
                <th>S_no</th>
                <th>product id</th>
                <th>Rental price</th>
                <th>Date</th>
                <th>Action</th>
                <?php
                $c=1;
                $qry="select * from cart where user_id='".$_SESSION['adminlogin']."'";
                $run=mysqli_query($con,$qry);
                while($data=mysqli_fetch_array($run))
                {
                    echo "<tr>
                    <td>".$data['id']."</td>
                    <td>".$data['product_id']."</td>
                    <td>".$data['total_price']."</td>
                    <td>".$data['currentdate']."</td>
                    <td><a href='delete_cart.php?id=".$data['id']."'<button class='btn btn-dark'><i class='fa-solid fa-trash me-2'></i>Remove</button></a></td>
                    </tr>";
                    $c++;
                }

                ?>
            </table>
        </tr>
    </div>