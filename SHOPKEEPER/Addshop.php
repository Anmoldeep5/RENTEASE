<?php
include "../ADMIN/adminheader.php";
?>
<?php
if(isset($_POST['add']))
{
    $shopkeepername=mysqli_real_escape_string($con,$_POST['shopkeepername']);
    $shopname=mysqli_real_escape_string($con,$_POST['shopname']);
    $shopaddress=mysqli_real_escape_string($con,$_POST['shopaddress']);
    $shopimage=$_FILES['shopimage']['name'];
    $tshopimage=$_FILES['shopimage']['tmp_name'];
    move_uploaded_file($tshopimage,"../SHOPKEEPER/shopimage/".$shopimage);
    
    $doccument=$_FILES['doccument']['name'];
    $tdoccument=$_FILES['doccument']['tmp_name'];
    move_uploaded_file($tdoccument,"../SHOPKEEPER/shopimage/".$doccument);
    
    if($shopkeepername==""|| $shopname==""|| $shopaddress==""|| $shopimage==""|| $doccument=="")
    {
        echo "<script>alert('please fill your data !')</script>";
    }
    else
    {
        $qry="insert into addshop(shopkeepername,shopname,shopaddress,shopimage,doccument,currentdate) values('$shopkeepername','$shopname','$shopaddress','$shopimage','$doccument',now())";
        if(mysqli_query($con,$qry))
                {
                  echo "<script>alert('Shop added !')</script>";
                }
                else
                {
                  echo mysqli_error($con);
                }
    }
}
?>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4 offset-4">
        <form action="#" method="post" enctype="multipart/form-data">
            <h2 class="text-primary my-4 text-center">Add Shop</h2>

            <label for="" class="fw-bold">Shopkeeper Name</label>
            <input type="text" name="shopkeepername" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">
            
            <label for="" class="fw-bold">Shop Name</label>
            <input type="text" name="shopname" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">
            
            <label for="" class="fw-bold">Shop Address</label>
            <input type="text" name="shopaddress" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">
            
            <label for="" class="fw-bold">Shop image</label>
            <input type="file" name="shopimage" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">
            
            <label for="" class="fw-bold">Doccument</label>
            <input type="file" name="doccument" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start">

            <button type="submit" name="add" class="btn btn-primary px-5">Add</button>
        </form>
    </div>
</div>