<?php
include "db.php";


// 0131040100029471 
function viewAllComments(){
    global $connection;
    $view_comments= "SELECT * FROM comments ";
    $view_comments_result = mysqli_query($connection,$view_comments);
    if($view_comments_result){
        while($row_post= mysqli_fetch_assoc($view_comments_result)){
            $comment_id =$row_post['comment_id'];
            $comment_post_id=$row_post['comment_post_id'];
            $comment_email=$row_post['comment_email'];
            $comment_author=$row_post['comment_author'];
            $comment_content=$row_post['comment_content'];
            $comment_status=$row_post['comment_status'];
            $comment_date=$row_post['comment_date'];
           ?>
           <tr>
                    <td><?php echo $comment_id; ?></td>
                    <td><?php echo $comment_post_id; ?></td>
                     <!-- <td>
                    <?php
                     $sql_category = "SELECT * FROM categories ";
                     $result_category = mysqli_query($connection,$sql_category);
                     while($row_category=mysqli_fetch_assoc($result_category)){
                         $cat_id= $row_category['cat_id'];
                         $cat_title=$row_category['cat_title'];
         
                         echo "<option value='.$cat_title.'>$cat_title </option>";
                     }
                     
                     ?>
                     </td> -->
                    <td><?php echo $comment_author; ?></td>
                    <td><?php echo $comment_content; ?></td>
                    
                    <td><?php echo $comment_email; ?></td>  
                    <td><?php echo $comment_status; ?></td>                  
                    <td><?php echo $comment_date; ?></td>
                    <?php
                    echo
                    '<td>
                    
                  <button class="btn btn-primary"><a href="edit_comment.php?unapprove='.$comment_id.' " class="text-light">UnApprove</a></button></td><td>
                  <button class="btn btn-primary"><a href="edit_comment.php?approve='.$comment_id.' " class="text-light">Approve</a></button></td><td>
                  <button class="btn btn-danger"><a href="delete_comment.php?delete_comment='.$comment_id.'" class="text-light">Delete</a></button>
                </td>'
                    ?>
                  
    
                </tr>
                <?php            
        }
    }
}
function addComment(){
  
        global $connection;
        if(isset($_POST['create_comment'])){
            // echo $_POST['comment_author']; this line is for testing 


            $comment_author =$_POST['comment_author'];
            $comment_email =$_POST['comment_email'];
            $comment_text =$_POST['comment_text'];
            // $comment_date = $_POST['date'];

            $update_query = "INSERT INTO comments (comment_author,comment_email, comment_content,comment_status,comment_date )
            VALUES ('$comment_author', '$comment_email','$comment_text','unapproved',now())" ;

            $result_update_comment= mysqli_query($connection,$update_query);
            if($result_update_comment){
                echo " Comment update successfulluy";
            }else{
                die("Failed to comment".mysqli_error($connection));
            }

                }
    
}


   



function approveComments(){
    global $connection;
    // $id=$_GET['approve'];

    if(isset($_GET['approve'])){

        $approve = $_GET['approve'];

        $approve_query = "UPDATE comments SET comment_status= 'approved' WHERE comment_id =$approve";

        $result_update_post= mysqli_query($connection,$approve_query);
        if($result_update_post){
            header("location:view_all_comments.php");
        }else{
            echo "something is wrong";
        }

    }



// some part is also updated in edit_comment.php
}


function unapproveComments(){
    global $connection;
    // $id=$_GET['approve'];

    if(isset($_GET['unapprove'])){

        $approve = $_GET['unapprove'];

        $approve_query = "UPDATE comments SET comment_status= 'unapproved' WHERE comment_id =$approve";

        $result_update_post= mysqli_query($connection,$approve_query);
        if($result_update_post){
            header("location:view_all_comments.php");
        }else{
            echo "something is wrong";
        }

    }
}

function deleteComments(){
    global $connection;

    if(isset($_GET['delete_comment'])){

        $delete_comment = $_GET['delete_comment'];
        $sql_delete = "DELETE FROM comments WHERE comment_id = $delete_comment";
        $result_delete= mysqli_query($connection,$sql_delete);
        if($result_delete){
            header("location:view_all_comments.php");
        }else{
            die("try again ". mysqli_error($connection));
        }
        
    }

   
}


?>