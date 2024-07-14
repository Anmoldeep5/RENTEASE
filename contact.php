<?php
include"header.php";
?>

    <!--contect page-->

    <div class="widebg1 my-5">
      <div class="row">
        <div class="col-md-6 col-sm-12"></div>
        <div class="col-md-6 col-sm-12">
          <h1 class="contect1">Contact US</h1>
          <p class="contect2">
            Customer Support: +91 8729037125 <br>Email:gurdeepsekhu25@gmail.com
          </p>
         
        </div>
      </div>
    </div>

    <!--input box-->

    <div class="row mt-5">
    <?php 
        if(isset($_POST['send']))
        {
          $name=mysqli_real_escape_string($con,$_POST['name']);
          $email=mysqli_real_escape_string($con,$_POST['email']);
          $phonenumber=mysqli_real_escape_string($con,$_POST['phonenumber']);
          $comment=mysqli_real_escape_string($con,$_POST['comment']);

          $qry="insert into dbcontactpage(name,email,phonenumber,comment,currentdate) values('$name','$email','$phonenumber','$comment',now())";
          if(mysqli_query($con,$qry))
          {
            echo "<script>alert('data inserted!')</script>";
          }
          else
          {
            echo mysqli_error($con);
          }
        }
      ?>
      <form action="#" method="post" id="contactemail">
        <div class="col-sm-12 col-md-6 col-lg-6 offset-3">
          <div class="row mt-5">
            <h2 class="mb-4">Give Us a Shout</h2>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <input
              type="text"
              placeholder="Name" name="name"
              class="form-control mt-2 p-3 border-1 border-dark btn btn-outline-secondary text-start"
           required />
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <input
              type="email"
              placeholder="Email" name="email"
              class="form-control mt-2 p-3 border-1 border-dark btn btn-outline-secondary text-start"
              required/>
          </div>
        </div>
        <input
          type="tel"
          placeholder="Phone number" name="phonenumber"
          class="form-control mt-4 p-3 border-1 border-dark btn btn-outline-secondary text-start"
          required/>
        <textarea
          name="comment"
          id="#"
          placeholder="Comment"
          class="form-control mt-4 pe-5 pb-5 border-1 border-dark btn btn-outline-secondary text-start"
          required></textarea>
        <span><button class="btn btn-dark text-light px-5 mt-4 mb-5 rounded-0" name="send" type="submit">
            Send
          </button>
      </span>
      </div>
      </form>
    </div>
    <!--/input box-->

    <!--footer-->
    <?php
    include "footer.php";
    ?>
    <!--/footer-->

    <!--/contect page-->
  </body>
  
</html>
