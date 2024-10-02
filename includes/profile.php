<?php
include "../admin/includesadmin/header.php";

if(isset($_SESSION['username_index'])){
    $profile_user= $_SESSION['username_index'];

    $sql_profile="SELECT *FROM users WHERE user_name='$profile_user' ";
    $res_profile= mysqli_query($connection,$sql_profile);
    if($res_profile){
        while($row_profile= mysqli_fetch_assoc($res_profile)){
            $user_name = $row_profile['user_name'];
          $user_password = $row_profile['user_password'];
          // $user_fristname = $rowupdate['user_fristname'];
          $user_fristname = $row_profile['user_lastname'];
          $user_lastname = $row_profile['user_lastname'];
          $user_email = $row_profile['user_email'];
          $user_image = $row_profile['user_image'];
          $user_role = $row_profile['user_role'];
          $ransalt = $row_profile['ransalt'];
        }
    }
}



if (isset($_POST['update_profile'])) {
    
    
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
        user_role='$user_role',ransalt='$ransalt' WHERE user_name='$profile_user' ";

    $result_update_profile = mysqli_query($connection, $update_query);
    if ($result_update_profile) {
        echo '<div class="alert alert-success" role="alert">
             <h4 class="alert-heading">Well done!</h4>
             <hr>
             <h3 class="text-aling:center">Data has been uploaded successfully</h3>
            
            </div>';
        // header("location:view_all_users.php");
    } else {
        die("Failed to comment" . mysqli_error($connection));
    }
}


?>

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
                <select name="role" id="">
                <option value="subscriber"><?php echo $user_role; ?></option>

                <?php
                if($user_role == 'admin'){
                    echo '<option value="subscriber">subscriber</option>';
                }else{
                    echo '<option value="admin">admin</option>';
                }
                
                ?>
                   
                    <!-- <option value="admin">admin</option>
                    <option value="subscriber">subscriber</option> -->
                </select>
                <!-- <label for="text" class="form-label">user_role</label>
                <input type="text" class="form-control" name="role" 
                value="<?php echo $user_role; ?>" aria-describedby="emailHelp"> -->
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
            
            <button type="submit" name="update_profile" value="update_profile" class="btn btn-primary">update Profile</button>
        </form>