<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>


    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; 

    // include "./admin/posts/view_all_posts.php";



if (isset($_POST['submit'])) {
    // echo $_POST['comment_author']; this line is for testing 


    $user_name = $_POST['username'];
    $user_password = $_POST['password'];
  
    $user_email = $_POST['email'];

    if(!empty($user_name)&& !empty($user_password) && !empty($user_email)){

        $query_encrpt = "SELECT * FROM users";
        $enc_users = mysqli_query($connection,$query_encrpt);
        if(!$enc_users){
            die("Query Failed".mysqli_error($connection));
        }
        $row_enc = mysqli_fetch_array($enc_users);
        $salt= $row_enc['ransalt'];
        $user_password = crypt($user_password,$salt);

        //Above 8 lines code is for encryption password security purpose only under if statement from query_update .

        $update_query = "INSERT INTO users (user_name,user_password,user_email )
        VALUES ('$user_name','$user_password','$user_email')";

    $result_update_comment = mysqli_query($connection, $update_query);
    if ($result_update_comment) {
        $message= '<div class="alert alert-success" role="alert">
             <h4 class="alert-heading">Well done!</h4>
             <hr>
             <h1 class="text-aling:center">Registration has been done successfully</h1>
            
            </div>';
        // header("location:./admin/posts/view_all_posts.php");
    }   

    
    }else {
        // die("Failed to comment" . mysqli_error($connection));
        $message = '<h3 class="text-center text-danger">Fields can not be empty</h3>';
    } 


}
    
    
    
    ?>

    <!-- <h5 class="text-center color-danger">Fields can not be emty</h5> -->
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1><?php  echo $message; ?></h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
