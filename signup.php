<?php
include "header.php";
?>

<div class="row py-5 bg-primary-subtle">
    <div class="col-sm-12 col-md-6 col-lg-7 py-5 my-5 offset-4">
        <div class="card shadow-lg py-4 px-3 bg-secondary-subtle" >
        <h2 class="mb-4 fw-bold"><span class="text-primary">Sign</span>up</h2>

        <?php
            if (isset($_POST['signup']))
            {
                $firstname=mysqli_real_escape_string($con,$_POST['firstname']);
                $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
                $email=mysqli_real_escape_string($con,$_POST['email']);
                $password=mysqli_real_escape_string($con,$_POST['password']);
                $confrmpassword=mysqli_real_escape_string($con,$_POST['confirmpassword']);
                $usertype=mysqli_real_escape_string($con,$_POST['usertype']);

                $qry="insert into tbsignup(firstname,lastname,email,password,usertype,currentdate) values
                ('$firstname','$lastname','$email','$password','$usertype',now())";
                if(mysqli_query($con,$qry))
                 {
                    echo "<script>alert('sign up successfuly !')</script>";
                 }

                else
                {
                    echo "problem in account create please try again !";
                    echo mysqli_error($con);
                }
            }
        ?>
            <form action="#" method="post">
                <div class="row mt-2">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="#">First name</label>
            <input
              type="text"
              name="firstname"
              class="form-control mb-4 btn btn-outline-secondary text-start"
           required />
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="#">Last name</label>
            <input
              type="text"
             name="lastname"
              class="form-control mb-4 btn btn-outline-secondary text-start"
              required/>
          </div>
        </div>
                <label for="#" class="mb-1">Email</label>
                <input type="email" name="email" class="form-control mb-4 btn btn-outline-secondary text-start"required></input>

                <label for="#">Password</label>
                <input type="password" name="password" class="form-control mb-4 btn btn-outline-secondary text-start"required></input>

                <label for="#">confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control mb-4 btn btn-outline-secondary text-start" required></input>
                
                <select  class="form-control mb-4 btn btn-outline-secondary text-start" name="usertype" required">
                    <option value="USER">USER</option>
                    <option value="SHOPKEEPER">SHOPKEEPER</option>
                </select>
                
                <button type="submit" name="signup" class="form-control btn btn-primary my-2 fw-bold">Sign up</button>
                <p class="mt-3 text-center">Have an account?<a href="login.php" class="text-decoration-none fw-bold ms-3">Login</a></p>
            </form>
        
        </div>
    </div>
</div>