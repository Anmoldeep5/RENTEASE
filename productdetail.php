<?php
include "header.php";
?>
<div class="container">
<div class="mt-5">
<?php
        $id=mysqli_real_escape_string($con,$_GET['id']);
        $qry="select * from addproduct where id='$id'";
        $run=mysqli_query($con,$qry);
        while($data=mysqli_fetch_array($run))
        {
            echo "<div class='row'>
            <div class='col-lg-6  text-center'>
            
            <img src='SHOPKEEPER/productpic/".$data['picture']."' width='100%' class='my-3 p-x'> 
            </div>

            <div class='col-sm-12 col-md-6 col-lg-6 text-start'>

            <h3>".$data['name']."</h3>
            <h5 class='text-primary'>Rental: Rs-".$data['price']."</h5>
            <h5 class='text-primary'>Security: Rs-".$data['security']."</h5>
            <h5 class='pb-5'>Size: ".$data['size']."</h5>
            <h4 class='mt-5 pt-5'> About product</h4>
            <hr>
            <p class='mt-2'>".$data['information']."</p>
           
            </div>
            </div>";
        }
        ?>
</div>
</div>

<?php
include "footer.php";
?>