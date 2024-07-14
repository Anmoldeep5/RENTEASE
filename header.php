<?php
session_start();
include "mpdb.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Www.Easy-Rent.com</title>
    <link rel="stylesheet" href="index.css" />
    <link href="ihover.css" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <!--first row-->
    <div class="container-fluid"> 
      <div class="row border-top border-bottom mt-1 ">
        <div class="col-sm-3 col-md-6 col-lg-3 ps-4 my-1">
          <p class="text-secondary  pt-2">
            Let's talk! <span class="fw-bold">+91 87290 37125</span>
          </p>
        </div>
        <div class="col-sm-6  col-md-6 col-lg-7 text-end pt-2">
          
            <!--Free shipping on a purchase value of $200-->
            
            
         
        </div>
        <div class="col-sm-3 col-md-6 col-lg-2 float-end">
          <div class="pt-3">
            <?php
             if(isset($_SESSION['adminlogin']))
             {
              $qry=mysqli_query($con,"select * from tbsignup where id='".$_SESSION['adminlogin']."'");
              $data1=mysqli_fetch_array($qry);
            
             ?>
             <?php
             $run=mysqli_query($con,"select COUNT(*) from cart where user_id='".$_SESSION['adminlogin']."'");
             $data=mysqli_fetch_array($run);
             ?>
             <a href="cart.php" class="ps-3 text-decoration-none"
              ><i class="fa-solid fa-cart-shopping"></i
             ><sup><?php echo $data[0]?></sup></a>
            
             <a href="ADMIN/dashboard.php" class="ps-3 me-2 text-decoration-none text-uppercase"><i class="fa-regular fa-user me-2"></i><?php echo $data1['firstname']?></a>
              <a href="ADMIN/logout.php"><i class="fa-solid fa-power-off text-danger"></i></a> 
            
             
             <?php
             }
             else
             {
             echo mysqli_error($con);
             }
            
            ?>
              
            
          
            
            <!-- <a href="" class="ps-3"><i class="fa-regular fa-heart"></i></a> -->
            <!-- <a href="" class="ps-3" -->
              <!-- ><i class="fa-solid fa-magnifying-glass"></i -->
            <!-- ></a> -->
          </div>
        </div>
      </div>
    </div>
    <!--first row-->

    <!--navbaar-->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
      
        <p class="fs-2 fw-bold ps-2 text-secondary">
          Easy<span class="text-primary">Rent.</span>
        </p>
        
        <button 
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="col-sm-4 col-md-6 col-lg-10 ">
            <ul class="navbar-nav  float-end fs-5">
              <li><a href="index.php" class="nav-link mx-1 text-secondary navhover1">Home</a></li>
              <li><a href="" class="nav-link mx-1 text-secondary navhover1">About</a></li>
              <li><a href="products.php" class="nav-link mx-1 text-secondary navhover1">Shop</a></li>
              <!-- <li><div class="dropdown"> 
                <a href="#" class="nav-link dropdown-toggle text-secondary navhover1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  City
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Bathinda</a></li>
                  <li><a class="dropdown-item" href="#">Dabwali</a></li>
                  <li><a class="dropdown-item" href="#">Raman Mandi</a></li>
                </ul>
              </div></li>-->
              <li><div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle text-secondary navhover1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Section
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.php #clothes">Clothes</a></li>
                  <li><a class="dropdown-item" href=" index.php #jewellery">Jewellery</a></li>
                </ul>
              </div></li>
              <li><a href="blog.php" class="nav-link mx-1 text-secondary navhover1">Blogs</a></li>
              <li><a href="contact.php" class="nav-link mx-1 text-secondary navhover1">Contact</a></li>
              <li><div class="float-end">
            <a href="login.php" class="btn btn-primary text-decoration-none fw-bold ms-5 py-1 px-4 ">Login</a>
            </div></li>
              
            </ul>
          </div>
          
        </div>
        
      </div>
     
    </nav>
    <!--/navbaar-->