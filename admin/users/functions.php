<?php
include "db.php";


// 0131040100029471 
function viewAllusers()
{
    global $connection;
    $view_users = "SELECT * FROM users ";
    $view_users_result = mysqli_query($connection, $view_users);
    if ($view_users_result) {
        while ($row_user = mysqli_fetch_assoc($view_users_result)) {
           $user_id = $row_user['user_id'];
           $user_name = $row_user['user_name'];
           $user_password= $row_user['user_password'];
           $user_fristname = $row_user['user_fristname'];
           $user_lastname = $row_user['user_lastname'];
           $user_email= $row_user['user_email'];
           $user_image = $row_user['user_image'];
           $user_role = $row_user['user_role'];
           $ransalt = $row_user['ransalt'];
?>
            <tr>
                <td><?php echo $user_id; ?></td>
                <td><?php echo $user_name; ?></td>
                <!-- <td>
                    <?php
                    $sql_category = "SELECT * FROM categories ";
                    $result_category = mysqli_query($connection, $sql_category);
                    while ($row_category = mysqli_fetch_assoc($result_category)) {
                        $cat_id = $row_category['cat_id'];
                        $cat_title = $row_category['cat_title'];

                        echo "<option value='.$cat_title.'>$cat_title </option>";
                    }

                    ?>
                     </td> -->
                <td><?php echo $user_password; ?></td>
                <td><?php echo $user_fristname; ?></td>

                <td><?php echo $user_lastname; ?></td>
                <td><?php echo $user_email; ?></td>
                <td><?php echo $user_image; ?></td>
                <td><?php echo $user_role; ?></td>
                <td><?php echo $ransalt; ?></td>
                <?php
                echo
                '<td>
                    
                  <button class="btn btn-primary"><a href="edit_user.php?update_user=' . $user_id . ' " class="text-light">Update</a></button></td><td>
             
                  <button class="btn btn-danger"><a href="delete_user.php?delete_user=' . $user_id . '" class="text-light">Delete</a></button>
                </td>'
                ?>
              
                 


            </tr>
            
<?php
        }
    }
}
function addusers()
{

    global $connection;
    $successMessage = '';
    if (isset($_POST['create_user'])) {
        // echo $_POST['comment_author']; this line is for testing 


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

        $update_query = "INSERT INTO users (user_name,user_password,user_fristname,user_lastname,user_email,user_image,user_role,ransalt )
            VALUES ('$user_name','$user_password','$user_fristname','$user_lastname','$user_email','$user_role','$user_image','$ransalt')";

        $result_update_comment = mysqli_query($connection, $update_query);
        if ($result_update_comment) {
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
}






function approveusers()
{
    global $connection;
    // $id=$_GET['approve'];

    if (isset($_GET['approve'])) {

        $approve = $_GET['approve'];

        $approve_query = "UPDATE users SET comment_status= 'approved' WHERE comment_id =$approve";

        $result_update_post = mysqli_query($connection, $approve_query);
        if ($result_update_post) {
            header("location:view_all_comments.php");
        } else {
            echo "something is wrong";
        }
    }



    // some part is also updated in edit_comment.php
}


function unapproveusers()
{
    global $connection;
    // $id=$_GET['approve'];

    if (isset($_GET['unapprove'])) {

        $approve = $_GET['unapprove'];

        $approve_query = "UPDATE users SET comment_status= 'unapproved' WHERE comment_id =$approve";

        $result_update_post = mysqli_query($connection, $approve_query);
        if ($result_update_post) {
            header("location:view_all_comments.php");
        } else {
            echo "something is wrong";
        }
    }
}

function deleteusers()
{
    global $connection;

    if (isset($_GET['delete_user'])) {

        $delete_user = $_GET['delete_user'];
        $sql_delete = "DELETE FROM users WHERE user_id = $delete_user";
        $result_delete = mysqli_query($connection, $sql_delete);
        if ($result_delete) {
            header("location:view_all_users.php");
        } else {
            die("try again " . mysqli_error($connection));
        }
    }
}


?>