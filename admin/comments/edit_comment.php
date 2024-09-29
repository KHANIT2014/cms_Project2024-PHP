<?php

include "../includesadmin/header.php";
include "db.php";
include "functions.php";
// updatePost();


// if(isset($_POST['submit'])){ 
//     $post_category_id=$_POST['post_category_id'];
//     $post_title=$_POST['post_title'];
//     $post_author=$_POST['post_author'];
//     $post_content=$_POST['post_content'];
//     $post_status=$_POST['post_status'];
//     $post_tags =$_POST['tags'];
//     $post_count =$_POST['post_viewed_count'];
//     $post_image =$_FILES['image']['name'];
//     $post_image_tmp =$_FILES['image']['tmp_name'];
//     $targetPath= "../uploads/".$post_image;
//     $post_date=date('d-m-y');

//     move_uploaded_file($post_image_tmp,$targetPath);
     



//         $add_post= "INSERT INTO posts( `post_category_id`, `post_title`,
//          `post_author`,  `post_date`, `post_image`, `post_content`, `post_tags`, 
//           `post_status`, `post_viewed_count`)
//           VALUES ('$post_category_id','$post_title','$post_author','$post_date',
//         '$targetPath','$post_content','$post_tags','$post_status','$post_count')";
//         $result_add_post= mysqli_query($connection,$add_post);
//         if($result_add_post){
//             echo "Post added successfully";
//         }else{
//             echo "failed to add try again";
//         }

// }




// if(isset($_POST['update'])){ 
//     $post_category_id=$_POST['post_category_id'];
//     $post_title=$_POST['post_title'];
//     $post_author=$_POST['post_author'];
//     $post_content=$_POST['post_content'];
//     $post_status=$_POST['post_status'];
//     $post_tags =$_POST['tags'];
//     $post_count =$_POST['post_viewed_count'];
//     $post_image =$_FILES['image']['name'];
//     $post_image_tmp =$_FILES['image']['tmp_name'];
//     $targetPath= "../uploads/".$post_image;
//     $post_date=date('d-m-y');

//     move_uploaded_file($post_image_tmp,$targetPath);
     



//         $update_post= "UPDATE posts SET post_category_id ='$post_category_id', post_title= '$post_title',
//          post_author='$post_author',  post_date='$post_date', post_image= '$post_image', 
//          post_content ='$post_content', post_tags= '$post_tags', 
//           post_status='$post_status', post_viewed_count= '$post_count'";
          
//         $result_update_post= mysqli_query($connection,$update_post);
//         if($result_update_post){
//             header("location:posts.php");
//         }else{
//             echo "something is wrong";
//         }
        
       

// }

approveComments();
unapproveComments();
$id=$_GET['updateid'];
    $query = "SELECT * FROM comments where comment_id =$id ";
  $result = mysqli_query($connection,$query);
  if($result){
    while($rowupdate = mysqli_fetch_assoc($result)){
    $comment_id=$rowupdate['comment_id'];
    $comment_post_id=$rowupdate['comment_post_id'];
    $comment_author=$rowupdate['comment_author'];
    $comment_content=$rowupdate['comment_content'];
    $comment_email=$rowupdate['comment_email'];
    // $comment_status =$rowupdate['comment_status'];

    $comment_date =$rowupdate['date'];

    }
}

       
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppdate Comments</title>
</head>

<body>
    <div class="container">

    
        <form action="" method="post" enctype="multipart/form-data">
            <!-- <div class="mb-3" class="form-group">
                <label for="text" class="form-label">Post Category ID</label>
                <input type="text" class="form-control" name="post_category_id"
                 aria-describedby="emailHelp" value="<?php echo $post_category_id?>">
            </div> -->
           
            <div class="mb-3">
                <label for="text" class="form-label">Comment ID</label>
                <input type="text" class="form-control" name="comment_id" 
                value="<?php echo $comment_id?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3" class="form-group">
            <select name="post_category_id" id="">

            <!-- <?php 
            $sql_category = "SELECT * FROM categories ";
            $result_category = mysqli_query($connection,$sql_category);
            while($row_category=mysqli_fetch_assoc($result_category)){
                $cat_id= $row_category['cat_id'];
                $cat_title=$row_category['cat_title'];

                echo "<option value='.$cat_title.'>$cat_title </option>";
            }
            
            ?> -->
            </select>
            </div>
            <div class="mb-3 ">
                <label for="text" class="form-label">comment_post_id</label>
                <input type="text" class="form-control" name="comment_post_id"
                value="<?php echo $comment_post_id?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">comment_author</label>
                <input type="text" class="form-control" name="comment_author"
                value="<?php echo $comment_author?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">comment_content</label>
                <input type="text" class="form-control" name="comment_content"
                value="<?php echo $comment_content?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">comment_email</label>
                <input type="text" class="form-control" name="comment_email"
                value="<?php echo $comment_email?>" aria-describedby="emailHelp">
            </div>
            <!-- <div class="mb-3">
                <label for="text" class="form-label">comment_Status</label>
                <input type="text" class="form-control" name="comment_status"
                value="<?php echo $comment_status?>" aria-describedby="emailHelp">
            </div> -->
           
            <div class="mb-3">
                <label for="text" class="form-label">comment date</label>
                <input type="date" class="form-control" name="comment_date" 
                value="<?php echo $comment_date?>" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" name="update" value="update" class="btn btn-primary">update</button>
        </form>
    </div>
</body>

</html>

