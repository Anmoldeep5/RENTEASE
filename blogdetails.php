<?php
include "header.php";
?>
<!-- photo -->
<div class="widebg1 my-5">
      <div class="row">
        <div class="col-md-6 col-sm-12"></div>
        <div class="col-md-6 col-sm-12">
          <h1 class="contect1">BLOG_DETAILS</h1>
          <p class="contect2">
          <a href="index.php" class="text-decoration-none fw-bold"> Home</a><span class="text-danger">/</span><a href="#viewblog" class="text-decoration-none fw-bold">blog_details</a>
          </p>
         
        </div>
      </div>
    </div>
<!--/photo -->
<div class="container">
    <div id="viewblog" class="row my-5">
        <?php
        $id=mysqli_real_escape_string($con,$_GET['id']);
        $qry="select * from addblogs where id='$id'";
        $run=mysqli_query($con,$qry);
        while($data=mysqli_fetch_array($run))
        {
            echo "<div class='col-lg-10 offset-1 text-center'>
            
            <img src='ADMIN/blogpic/".$data['picture']."' width='100%'  class='my-3'> 

            <div class='text-start'>

            <h3>".$data['title']."</h3>
            <p>".$data['submit']."</p>
            <h6 class='text-warning'>".$data['currentdate']."</h6>
            <p>".$data['message']."</p>
           
            </div>";
        }
        ?>
    </div>
</div>
<div class="text-center">
<a href="blog.php" class="btn btn-outline-success py-0 text-decoration-none "><i class="fa-solid fa-arrow-left me-3"></i>Back to Blogs</a>
      </div>
<?php
include "footer.php";
?>