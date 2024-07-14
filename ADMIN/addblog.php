<?php
include "adminheader.php";
?>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 offset-3">
        <h2 class="text-center my-2 text-decoration-underline"><span class="text-primary"><i class="fa-solid fa-blog me-3"></i>Add Blog</span></h2>
        <?php
            if(isset($_POST['addblog']))
            {
                $title=mysqli_real_escape_string($con,$_POST['title']);                
                $submit=mysqli_real_escape_string($con,$_POST['submit']);                
                $picture=$_FILES['picture']['name'];
                $tpicture=$_FILES['picture']['tmp_name'];
                move_uploaded_file($tpicture,"blogpic/".$picture);  
                $description=mysqli_real_escape_string($con,$_POST['description']);  
                $message=mysqli_real_escape_string($con,$_POST['message']);  
                
                if($title==""||$submit==""||$picture=="" ||$description=="" ||$message=="")
                {
                    echo "<script>alert('please fill your data !')</script>";
                }
                else
                {
                $qry="insert into addblogs(title,submit,picture,description,message,currentdate) values('$title','$submit','$picture','$description','$message',now())";
                if(mysqli_query($con,$qry))
                {
                  echo "<script>alert('blog added !')</script>";
                }
                else
                {
                  echo mysqli_error($con);
                }

            }
                }
        ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="" class="fw-bold">Title</label>
            <input type="text" name="title" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start" >
        
            <label for="" class="fw-bold">Submit by</label>
            <input type="text" name="submit" class="form-control mb-4 mt-2 btn btn-outline-secondary text-start" >

            <label for="" class="fw-bold">Picture</label>
            <input type="file" name="picture" class="form-control mb-4 mt-2 bg-light" >

            <label for="" class="fw-bold">Description</label>
            <textarea type="text-aria" name="description" class=" form-control mb-4 mt-2 bg-light" ></textarea>
            

            <label for="" class="fw-bold">Message</label>
            <textarea id="editor" type="text-aria" name="message" class=" form-control mb-4 mt-2 bg-light" ></textarea>
            

            <button type="submit" name="addblog" class="btn btn-primary mt-4">Add blog</button>
        </form>
    </div>  
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>