<?php

include "../includesadmin/header.php";
include "db.php";
include "functions.php";

// updateUser();

if(isset($_GET['update_user'])){
    $id=$_GET['update_user'];

    $query = "SELECT * FROM users WHERE user_id =$id ";
    $result = mysqli_query($connection,$query);
    if($result){
      while($rowupdate = mysqli_fetch_assoc($result)){
          $user_name = $rowupdate['user_name'];
          $user_password = $rowupdate['user_password'];
          // $user_fristname = $rowupdate['user_fristname'];
          $user_fristname = $rowupdate['user_lastname'];
          $user_lastname = $rowupdate['user_lastname'];
          $user_email = $rowupdate['user_email'];
          $user_image = $rowupdate['user_image'];
          $user_role = $rowupdate['user_role'];
          $ransalt = $rowupdate['ransalt'];
  
      }
  }

}
// upper case we are fetching the Data from Data Base Lower part we are updating the Data in DataBase. 


if (isset($_POST['update_user'])) {
    
    
    $user_name = $_POST['username'];
    $user_password = $_POST['password'];
    $user_fristname = $_POST['userfname'];
    $user_fristname = $_POST['userfname'];
    $user_lastname = $_POST['userlname'];
    $user_email = $_POST['email'];
    $user_image = $_POST['user_image'];
    $user_role = $_POST['role'];
    $ransalt = $_POST['ransalt'];
    // $comment_date = $_POST['date'];

    $update_query = "UPDATE users SET  user_name ='$user_name',user_password='$user_password',
        user_fristname='$user_fristname',user_lastname='$user_lastname',user_email='$user_email',user_image='$user_image',
        user_role='$user_role',ransalt='$ransalt' WHERE user_id=$id ";

    $result_update_user = mysqli_query($connection, $update_query);
    if ($result_update_user) {
        echo '<div class="alert alert-success" role="alert">
             <h4 class="alert-heading">Well done!</h4>
             <hr>
             <h3 class="text-aling:center">Data has been uploaded successfully</h3>
            
            </div>';
        header("location:view_all_users.php");
    } else {
        die("Failed to comment" . mysqli_error($connection));
    }
}




       
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>

<body>
    <?php
    updateUser();
    ?>
    <div class="container">
    
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="text" class="form-label">username</label>
                <input type="text" class="form-control" name="username" 
                value="<?php echo $user_name; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">password</label>
                <input type="password" class="form-control" name="password"  
                value="<?php echo $user_password; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user Fristname</label>
                <input type="text" class="form-control" name="userfname" value="<?php echo $user_fristname; ?>"
                 aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user lastname</label>
                <input type="text" class="form-control" name="userlname" 
                value="<?php echo  $user_lastname; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user email</label>
                <input type="email" class="form-control" name="email"
                value="<?php echo $user_email; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user image</label>
                <input type="text" class="form-control" name="user_image"
                value="<?php echo $user_image; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user_role</label>
                <input type="text" class="form-control" name="role" 
                value="<?php echo $user_role; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">ransalt</label>
                <input type="text" class="form-control" name="ransalt" value="<?php echo $ransalt; ?>"
                 aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post date</label>
                <input type="date" class="form-control" name="post_date" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" name="update_user" value="update_user" class="btn btn-primary">add user</button>
        </form>
    </div>
</body>

</html>

