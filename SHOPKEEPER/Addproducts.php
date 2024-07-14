<?php
include "../ADMIN/adminheader.php";
?>
<div class="row mt-5">
    
   <div class="col-sm-12 col-md-6 col-lg-4 offset-4">
    <?php
    if(isset($_POST['add']))
    {
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $price=mysqli_real_escape_string($con,$_POST['price']);
        $security=mysqli_real_escape_string($con,$_POST['security']);
        $size=mysqli_real_escape_string($con,$_POST['size']);
        $information=mysqli_real_escape_string($con,$_POST['information']);
        $picture=$_FILES['picture']['name'];
        $tpicture=$_FILES['picture']['tmp_name'];
        move_uploaded_file($tpicture,"../SHOPKEEPER/productpic/".$picture);
        
        if($name==""||$price==""||$security==""||$size==""||$information==""||$picture=="")
        {
            echo "<script>alert('please fill your data !')</script>";
        }
        else
        {
            $qry="insert into addproduct(name,price,security,size,information,picture,currentdate) values('$name','$price','$security','$size','$information','$picture',now())";
            if(mysqli_query($con,$qry))
                {
                  echo "<script>alert('Product added !')</script>";
                }
                else
                {
                  echo mysqli_error($con);
                } 
        }
    }
    ?>
    <form action="#" method="post" enctype="multipart/form-data">

    <h2 class="text-primary my-4 text-center">Add Product</h2>

        <label for="" class="fw-bold">Name</label>
        <input type="text" name="name" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">

        <label for="" class="fw-bold">Price</label> 
        <input type="text" name="price" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">

        <label for="" class="fw-bold">Security</label>
        <input type="text" name="security" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">

        <label for="" class="fw-bold">Size</label><br>
        <input type="checkbox" name="size" value="M">M
        <input type="checkbox" name="size" value="L">L
        <input type="checkbox" name="size" value="XL">XL
        <input type="checkbox" name="size" value="XXL">XXL <br>

        <label for="" class="fw-bold">Information</label>
        <textarea type="text" name="information" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start"></textarea>
 

        <input type="file" name="picture" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">

        <button type="submit" name="add" class="btn btn-primary px-5">Add</button>

    </form>
   </div>
</div>