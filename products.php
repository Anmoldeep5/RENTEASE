<?php 
include "header.php";
?>
<!-- photo -->
<div class="widebg1 my-5">
      <div class="row">
        <div class="col-md-6 col-sm-12"></div>
        <div class="col-md-6 col-sm-12">
          <h1 class="contect1">PRODUCTS</h1>
          <p class="contect2">
          <a href="index.php" class="text-decoration-none fw-bold"> Home</a><span class="text-danger">/</span><a href="#products" class="text-decoration-none fw-bold">products</a>
          </p>
         
        </div>
      </div>
    </div>
<!--/photo -->
<div class="container">
    <div id="products" class="row my-5 pb-5">
        <?php
        $qry="select * from addproduct";
        $run=mysqli_query($con,$qry);
        while($data=mysqli_fetch_array($run))
        {
            echo "<div class='col-sm-12 col-md-6 col-lg-3 my-2 p-4'>
        <div class=''>
            <img src='SHOPKEEPER/productpic/".$data['picture']."' width='100%' height='350px' class='border shadow'>
           
            <p class='ms- mt-4'>".$data['name']."</p>
            <h6 class='text-primary ms-'>Rental-".$data['price']." </h6>

            <div class='nav'>
            <a href='productdetail.php ?id=".$data['id']."'><button class='btn btn-outline-success px-2 py-0 pe-4 ps-4 border border-success mb-2 ms-'>Book</button></a>

            <form action='#' method='post'>
            <input type='hidden' value='".$data['price']."' name='price'>
            <input type='hidden' value='".$data['id']."' name='item_id'>
            <a href=''?id=".$data['id']."><button class='btn btn-outline-success mb-2 ms-5 py-0 ' name='cart' type='submit'><i class='fa-solid fa-cart-plus me-2'></i>cart</button></a>
           </div>
            </div>
            </form>
            </div>";
        }
        if(isset($_POST['cart']))
        {
            $id=mysqli_real_escape_string($con,$_POST['item_id']);
            $price=mysqli_real_escape_string($con,$_POST['price']);
            $qry="insert into cart(product_id,user_id,total_price,currentdate)values('$id','".$_SESSION['adminlogin']."','$price',now())";
            if($qry=mysqli_query($con,$qry))
            {
                echo "<script>alert('Added')</script>";
            }
            else

        {
            echo mysqli_error($con);
        }

        }
        ?>
        
    </div>
</div>
<?php
include "footer.php";
?>