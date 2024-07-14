<?php
include "header.php";
?>
<!-- photo -->
<div class="widebg1 my-5">
      <div class="row">
        <div class="col-md-6 col-sm-12"></div>
        <div class="col-md-6 col-sm-12">
          <h1 class="contect1">BLOG</h1>
          <p class="contect2">
          <a href="index.php" class="text-decoration-none fw-bold"> Home</a><span class="text-danger">/</span><a href="#blog" class="text-decoration-none fw-bold">blog</a>
          </p>
         
        </div>
      </div>
    </div>
<!--/photo -->
<div class="container">
    <div id="blog" class="row my-5 pb-5">
        <?php
        $qry="select * from addblogs";
        $run=mysqli_query($con,$qry);
        while($data=mysqli_fetch_array($run))
        {
            echo "<div class='col-sm-12 col-md-6 col-lg-4 my-2 p-5'>
            <img src='ADMIN/blogpic/".$data['picture']."' width='100%' height='400px' class='my-3 shadow'> 
            <h5>".$data['title']."</h5>
            <a href='blogdetails.php ?id=".$data['id']."'><button class='btn btn-outline-success py-0'>Show More</button></a>
            </div>";
        }
        ?>
    </div>
</div>

<?php
include "footer.php";
?>