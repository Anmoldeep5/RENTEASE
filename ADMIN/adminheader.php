<?php
session_start();
include "../mpdb.php";
if(empty($_SESSION['adminlogin']))
{
  header('location:../login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Www.Easy-Rent.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
   <!-- i con button -->
  <div class="row">
       <div class="col-sm-12 col-md-6 col-lg-4">
            <i class="fa-solid fa-bars ms-4 mt-3 fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></i>
    <!-- /i con button -->

<!-- profile side  -->
      </div>
           <div class="col-sm-12 col-md-6 col-lg-8 text-end pe-4">
                    <img src="img/admin.jpg" alt="" width="60px" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="dropdown">
                    <ul class="dropdown-menu">
                    <img src="img/admin.jpg" alt="" width="150px">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Change password</a></li>
                    <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
              </div>
       </div>
  </div>
  <!-- /profile side -->
  
<!-- admin side -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
<?php $run=mysqli_query($con,"select * from tbsignup where id='".$_SESSION['adminlogin']."'");
$data=mysqli_fetch_array($run);

?>
  <div class="offcanvas-body text-center">
  <img src="img/Admin-Profile-PNG-Clipart.png" width="130" alt="">
    <h4  class="mt-4 text-dark">Hi ! <br><?php echo $data['usertype']?></h4>
    <hr class="text-white">
    <?php
    if($_SESSION['usertype']=='admin')
    {
      ?>
    <ul class="nav-link">
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="../index.php"  class="nav-link text-black"><i class="fa-house fa-solid pe-3"></i>Home</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="dashboard.php"  class="nav-link text-black"><i class="fa-dashboard fa-solid pe-3"></i>Dashboard</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href=""  class="nav-link text-black"><i class="fa-shop fa-solid pe-3"></i>Shopkeeper</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="addblog.php" class="nav-link text-black"><i class="fa-blog fa-solid pe-3"></i>Add blog</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="viewblogs.php" class="nav-link text-black"><i class="fa-brands fa-blogger-b pe-3"></i>View blogs</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="feedback.php" class="nav-link text-black"><i class="fa-solid fa-comments pe-3"></i>Feedback</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5 "><a href="logout.php" class="nav-link text-black"><i class="fa-solid fa-right-from-bracket pe-3"></i>Log out</a></li>
    </ul>
      <?php
      }
      ?>
      <?php
      if($_SESSION['usertype']=='USER')
      {
        ?>
      <ul class="nav-link">
      <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="../index.php"  class="nav-link text-black"><i class="fa-house fa-solid pe-3"></i>Home</a></li>
      <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="../index.php"  class="nav-link text-black"><i class="fa-house fa-solid pe-3"></i>Dashboard</a></li>
      <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="../index.php"  class="nav-link text-black"><i class="fa-house fa-solid pe-3"></i>Profile</a></li>
      <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="#"  class="nav-link text-black"><i class="fa-dashboard fa-solid pe-3"></i>Favorite products</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="#" class="nav-link text-black"><i class="fa-blog fa-solid pe-3"></i> Order products</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="#" class="nav-link text-black"><i class="fa-solid fa-comments pe-3"></i>Contact us</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="logout.php" class="nav-link text-black"><i class="fa-solid fa-right-from-bracket pe-3"></i>Log out</a></li>
    </ul>
    <?php
    }
    ?>
    <?php
    if($_SESSION['usertype']=='SHOPKEEPER')
    {
    ?>
    <ul class="nav-link">
    <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="../index.php"  class="nav-link text-black"><i class="fa-house fa-solid pe-3"></i>Home</a></li>

    <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="../index.php"  class="nav-link text-black"><i class="fa-dashboard fa-solid pe-3"></i>Dashboard</a></li>
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="../SHOPKEEPER/Addshop.php"  class="nav-link text-black"><i class="fa-shop fa-solid pe-3"></i>Add Shop</a></li>

        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="../SHOPKEEPER/Addshop.php"  class="nav-link text-black"><i class="fa-shop fa-solid pe-3"></i>Add Category</a></li>

        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link  text-start ps-5"><a href="../SHOPKEEPER/Addproducts.php" class="nav-link text-black"><i class="fa-blog fa-solid pe-3"></i>Add products</a></li>

        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="../SHOPKEEPER/viewproducts.php" class="nav-link text-black"><i class="fa-brands fa-blogger-b pe-3"></i>View products</a></li>
        
        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="#" class="nav-link text-black"><i class="fa-solid fa-comments pe-3"></i>contact us</a></li>

        <li class=" bg-primary-subtle py-3 my-3 fs-6 fw-bold nav-link text-start ps-5"><a href="../ADMIN/logout.php" class="nav-link text-black"><i class="fa-solid fa-right-from-bracket pe-3"></i>Log out</a></li>
    </ul>
    <?php
    }
    ?>
  </div>
</div>
</div> 
    
    <!-- /user profile -->
  </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>