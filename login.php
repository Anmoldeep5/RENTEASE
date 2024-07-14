<?php

include "header.php";
?>
<div class=" container-fluid bg-primary-subtle">
<div class="row py-5 ">
    <div class="col-sm-12 col-md-6 col-lg-7 py-5 my-5 offset-4">
        <div class="card shadow-lg py-4 px-3 bg-secondary-subtle" >
        <h2 class="mb-4 fw-bold"><span class="text-primary">Log</span> in</h2>
        <?php
            if (isset($_POST['login']))
            {
                $email=mysqli_real_escape_string($con,$_POST['email']);
                $password=mysqli_real_escape_string($con,$_POST['password']);

                $qry="select * from tbsignup where email='$email' and password='$password'";
                $run=mysqli_query($con,$qry);
                if ($data=mysqli_fetch_array($run)) 
                {
                    $_SESSION['adminlogin']=$data['id'];
                    $_SESSION['usertype']=$data['usertype'];
                    echo "<script>window.location.href='index.php';</script>";             
                }
                else
                {
                    echo "username or password not correct";
                }
            }
        ?>
            <form action="#" method="post">
                <label for="#" class="mb-1">Email</label>
                <input type="email" name="email" class="form-control mb-4 btn btn-outline-secondary text-start" required></input>
                <label for="#">Password</label>
                <input type="password" name="password" class="form-control mb-4 btn btn-outline-secondary text-start" required></input>
                <button type="submit" name="login" class="form-control btn btn-primary my-2 fw-bold">Log in</button>
                <p class="mt-3 text-center">Don't have an account?<a href="signup.php" class="text-decoration-none fw-bold ms-3">Signup</a></p>
            </form>
    
        </div>
    </div>
</div>
</div>